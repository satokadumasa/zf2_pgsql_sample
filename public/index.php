<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
ini_set('display_errors', "On");
chdir(dirname(__DIR__));


// Setup autoloading
include 'init_autoloader.php';

// Run the application!
Laminas\Mvc\Application::init(include 'config/application.config.php')->run()->send();
