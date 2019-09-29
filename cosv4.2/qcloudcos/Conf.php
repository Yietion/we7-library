<?php

namespace qcloudcos;

class Conf {
    // Cos php sdk version number.
    const VERSION = 'v4.2.2';
    const API_COSAPI_END_POINT = 'http://region.file.myqcloud.com/files/v2/';

    // Please refer to http://console.qcloud.com/cos to fetch your app_id, secret_id and secret_key.
    const APP_ID = '1255416777';
    const SECRET_ID = 'AKIDkOp480dDWdYLAX9jXBqPTagaHo9H20e6';
    const SECRET_KEY = 'PdgYw88vVxHQN7e09X9mP6gIi5g6MQI1';

    /**
     * Get the User-Agent string to send to COS server.
     */
    public static function getUserAgent() {
        return 'cos-php-sdk-' . self::VERSION;
    }
}
