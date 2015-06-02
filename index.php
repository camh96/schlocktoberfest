<?php

date_default_timezone_set("Pacific/Auckland");

error_reporting(E_ALL);

if (! stristr($_SERVER['HTTP_HOST'], ".yoobee.net.nz") ) {
	// local developer environment
    ini_set('display_errors', true);
    ini_set("log_errors", 1);
    ini_set("error_log", getcwd()."/php-error.log");
} else {
	// production environment
    ini_set('display_errors', true);
    ini_set("log_errors", 1);
    ini_set("error_log", getcwd()."/php-error.log");
}

require "routes.php";
