<?php
return array(
    'modules' => require __DIR__ . '/modules.config.php',
/*
    'modules' => array(
        'Application',
        'Album',
    ),
*/
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);
