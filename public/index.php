<?php

require_once __DIR__ . '/../config/main.php';

$data = json_decode( file_get_contents( 'php://input' ) );

// For test
new \tlg\telegram\Telegram(TOKEN);