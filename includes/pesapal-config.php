<?php
// PesaPal Configuration for API 3.0
class PesaPalConfig {
    // Sandbox URLs (for testing)
    const SANDBOX_CONSUMER_KEY = 'your_sandbox_consumer_key_here';
    const SANDBOX_CONSUMER_SECRET = 'your_sandbox_consumer_secret_here';
    const SANDBOX_BASE_URL = 'https://cybqa.pesapal.com/pesapalv3';
    
    // Live URLs (for production)
    const LIVE_CONSUMER_KEY = '';
    const LIVE_CONSUMER_SECRET = '';
    const LIVE_BASE_URL = 'https://pay.pesapal.com/v3';
    
    // Current environment (set to 'live' for production)
    const ENVIRONMENT = 'live'; // Changed back to 'live'
    
    public static function getConsumerKey() {
        return self::ENVIRONMENT === 'sandbox' ? self::SANDBOX_CONSUMER_KEY : self::LIVE_CONSUMER_KEY;
    }
    
    public static function getConsumerSecret() {
        return self::ENVIRONMENT === 'sandbox' ? self::SANDBOX_CONSUMER_SECRET : self::LIVE_CONSUMER_SECRET;
    }
    
    public static function getBaseUrl() {
        return self::ENVIRONMENT === 'sandbox' ? self::SANDBOX_BASE_URL : self::LIVE_BASE_URL;
    }
}
?>