<?php
error_reporting(6143);
ini_set('display_errors', '1');

date_default_timezone_set('America/Sao_Paulo');

$settings = [];

// Path
$settings['root']   = dirname(__DIR__);
$settings['temp']   = $settings['root'] . '/tmp';
$settings['public'] = $settings['public'] . '/public';

return $settings;
