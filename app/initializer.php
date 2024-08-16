<?php  

// Llamando a config
require_once 'config/config.php';

// Llamando a url Helper
require_once 'helpers/url_helper.php';

// Llamando a libs 
spl_autoload_register(function($files){
    require_once 'libs/' . $files . '.php';
});






