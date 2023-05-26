<?php

define("DIR", dirname(dirname(dirname(__FILE__)))); #Root Directory

// Get Envionment variables from .env file
$env = parse_ini_file(DIR . '/.env');

if ($_SERVER['SERVER_NAME'] == "localhost") {
    define("ROOT", "http://localhost:3000"); # Main URL
    define("DEBUG", 1); # Display Logs in dev mode
} else {
    define("ROOT", "");
    define("DEBUG", 0);
}


define("DBHOST", $env['DBHOST']);
define("DBNAME", $env['DBNAME']);
define("DBUSER", $env['DBUSER']);
define("DBPASS", $env['DBPASS']);
