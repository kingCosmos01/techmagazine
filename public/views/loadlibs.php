<?php

    // Database Library
    require './controllers/Database.php';

    // Config
    require './config/config.php';

    spl_autoload_register(function($className){
        require_once './controllers/'. $className . '.php';
    });