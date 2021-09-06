<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
    $paths = [
        "classes/",
    ];
    $extension = ".class.php";

    foreach($paths as $path){
        $fullPath = $path.
            strtolower($className). //convert to lowercase to prevent bug in Linux Env
            $extension;    
        if(file_exists($fullPath)){
            include_once $fullPath;
            break;
        }
    }
}