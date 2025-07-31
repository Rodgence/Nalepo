<?php
require_once 'pesapal-config.php';

class PesaPalIntegration {
    private $consumer_key;
    private $consumer_secret;
    private $base_url;
    private $access_token;
    private $notification_id;
    
    public function __construct() {
        $this->consumer_key = PesaPalConfig::getConsumerKey();
        $this->consumer_secret = PesaPalConfig::getConsumerSecret();
        $this->base_url = PesaPalConfig::getBaseUrl();
        $this->access_token = $this->getAccessToken();
        $this->notification_id = $this->registerIPN();
    }
    
    private function getAccessToken() {
        $url = $this->base_url . '/api/Auth/RequestToken';
        
        $data = [
            'consumer_key' => $this->consumer_key,
            'consumer_secret' => $this->consumer_secret
        ];
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept: application/json',
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        $decodedResponse = json_decode($response, true);
        
        if ($httpCode >= 400 || !isset($decodedResponse['token'])) {
            throw new Exception('Failed to get access token: ' . $response);
        }
        
        return $decodedResponse['token'];
    }
    
    private function registerIPN() {
        $url = $this->base_url . '/api/URLSetup/RegisterIPN';
        
        $data = [
            'url' => 'http://localhost/Nalepo/payment-callback.php',
            'ipn_notification_type' => 'GET'
        ];
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $this->access_token,
            'Accept: application/json',
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        $decodedResponse = json_decode($response, true);
        
        if ($httpCode >= 400 || !isset($decodedResponse['ipn_id'])) {
            throw new Exception('Failed to register IPN: ' . $response);
        }
        
        return $decodedResponse['ipn_id'];
    }
    
    public function generatePaymentUrl($amount, $description, $reference, $email, $phone) {
        $url = $this->base_url . '/api/Transactions/SubmitOrderRequest';
        
        // Complete order data with required notification_id
        $orderData = [
            'id' => $reference,
            'currency' => 'USD',
            'amount' => (float)$amount,
            'description' => $description,
            'callback_url' => 'http://localhost/Nalepo/payment-callback.php',
            'notification_id' => $this->notification_id, // This was missing!
            'billing_address' => [
                'email_address' => $email,
                'phone_number' => $phone,
                'country_code' => 'TZ',
                'first_name' => 'Donor',
                'last_name' => 'User'
            ]
        ];
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($orderData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $this->access_token,
            'Content-Type: application/json',
            'Accept: application/json'
        ]);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        $decodedResponse = json_decode($response, true);
        
        if ($httpCode >= 400 || !isset($decodedResponse['redirect_url'])) {
            throw new Exception('Failed to generate payment URL: ' . $response);
        }
        
        return $decodedResponse['redirect_url'];
    }
    
    public function queryPaymentStatus($reference) {
        $url = $this->base_url . '/api/Transactions/GetTransactionStatus?orderTrackingId=' . $reference;
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $this->access_token,
            'Accept: application/json'
        ]);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        
        $response = curl_exec($ch);
        curl_close($ch);
        
        return json_decode($response, true);
    }
}
?>