<?php
$config = array();
$config['name'] = "Standalone Updater";
$config['author'] = "noah@piksera.com";
$config['no_cache'] = false;
$config['ui'] = false;
$config['ui_admin'] = true;
$config['is_system'] = true;
$config['categories'] = "other";
$config['position'] = 1;
$config['version'] = '1.0';



$config['settings']['autoload_namespace'] = [
    [
        'path' => __DIR__ . '/src/',
        'namespace' => 'PikseraPackages\\Modules\\StandaloneUpdater'
    ],
];

$config['settings']['service_provider'] = [
    \PikseraPackages\Modules\StandaloneUpdater\StandaloneUpdaterServiceProvider::class
];
