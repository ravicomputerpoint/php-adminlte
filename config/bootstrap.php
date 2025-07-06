<?php
if (!function_exists('loadEnv')) {
    function loadEnv() {
        static $env = null;
        if ($env === null) {
            $envPath = __DIR__ . '/../.env';
            if (file_exists($envPath)) {
                $env = parse_ini_file($envPath);
                foreach ($env as $key => $value) {
                    $_ENV[$key] = $value;
                }
            } else {
                die(".env file not found at $envPath");
            }
        }
    }
    loadEnv();
}
