<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    $path =  "classes/";
    $extension = ".classes.php";
    $fullPath = $path . $className . $extension;
    include_once $fullPath;

    if(!file_exists("autoloader.inc.php")) {
        return false;
        
    }
}