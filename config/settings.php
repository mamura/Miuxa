<?php
error_reporting(0);
ini_set('display_errors', '0');

date_default_timezone_set('America/Sao_Paulo');

$settings = [];

// Path
$settings['root']   = dirname(__DIR__);
$settings['temp']   = $settings['root'] . '/tmp';
$settings['public'] = $settings['public'] . '/public';

return $settings;