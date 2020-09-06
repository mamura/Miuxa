<?php
$settings = (require __DIR__ . '/bootstrap.php')->getContainer()->get('settings')['db'];

return [
    'paths' => [
        'migrations'    => 'db/migrations',
        'seeds'         => 'db/seeds'
    ],
    'environments' => [
        'default_migration_table'   => 'migrations',
        'default_database'          => 'dev',
        'dev'   => [
            'adapter'   => 'mysql',
            'host'      => $settings['host'],
            'name'      => $settings['database'],
            'user'      => $settings['username'],
            'pass'      => $settings['password'],
            'port'      => $settings['port']
        ]
    ]
];
