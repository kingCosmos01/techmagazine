<?php
    
    // Load config file
    require_once 'config/config.php';

    // Autoload Core Libraries
    spl_autoload_register(function($className){
        require_once 'libraries/'. $className . '.php';
    });
   

    // models
    require_once 'models/Articles.php';
