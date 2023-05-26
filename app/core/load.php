<?php
session_start();

require_once 'config.php';
require_once 'Database.php';
require_once 'REST.api.php';
require_once 'Controller.php';
require_once 'Model.php';
require_once 'App.php';

spl_autoload_register(function ($classname) {
    $filename = "./app/model/" . ucfirst($classname) . ".php";
    if (file_exists($filename)) {
        require_once $filename;
    }
});


function show($value)
{
    echo "<br><pre>";
    print_r($value);
    echo "</pre><br>";
}
