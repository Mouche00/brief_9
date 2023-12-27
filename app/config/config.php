<?php

$config = parse_ini_file('config.ini');

// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', $config['DB_USER']);
define('DB_PASS', $config['DB_PASS']);
define('DB_NAME', 'b9');

// App Root 
define('APPROOT', dirname(dirname(__FILE__)));

// URL Root
define('URLROOT', 'http://localhost:8000');
    
// Site Name
define('SITENAME', 'NINE INSURANCE');

// App Version
define('APPVERSION', '0.0.1');