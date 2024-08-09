<?php

$changeSettings = [
    'BE' => [
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$RmZtaE5LQU1rSGw2NUZiWQ$YdU5on+xJ4lI6Gwd4LWpbddeAEu88cctS2dnO+r9ty0',
        'lockSSL' => '0',
        'compressionLevel' => '0',
        'debug' => true,
    ],
    'EXTENSIONS' => [
        'mysqlreport' => [
            'activateExplainQuery' => '0',
            'enableBackendLogging' => '0',
            'enableFrontendLogging' => '1',
            'slowQueryThreshold' => '10.0',
        ],
    ],
    'SYS' => [
        'phpTimeZone' => 'Europe/Berlin',
        'sitename' => 'Menu comparison',
    ]
];
$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], $changeSettings);

if (getenv('IS_DDEV_PROJECT') == 'true') {
    if (file_exists("/mnt/ddev_config/xhgui/collector/xhgui.collector.php")) {
        require_once "/mnt/ddev_config/xhgui/collector/xhgui.collector.php";
    }

    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
        $GLOBALS['TYPO3_CONF_VARS'],
        [
            'DB' => [
                'Connections' => [
                    'Default' => [
                        'dbname' => 'db',
                        'host' => 'db',
                        'password' => 'db',
                        'port' => '3306',
                        'user' => 'db',
                    ],
                ],
            ],
            // This GFX configuration allows processing by installed ImageMagick 6
            'GFX' => [
                'processor' => 'ImageMagick',
                'processor_path' => '/usr/bin/',
                'processor_path_lzw' => '/usr/bin/',
            ],
            // This mail configuration sends all emails to mailhog
            'MAIL' => [
                'transport' => 'smtp',
                'transport_smtp_server' => 'localhost:1025',
            ],
            'SYS' => [
                'trustedHostsPattern' => '.*.*',
                'devIPmask' => '*',
                'displayErrors' => 1,
            ],
        ]
    );
}
