<?php
require "function/fancions.php";
require "function/Database.php";

$config = require("config.php"); // iekavas var būt problēm 
$db = new DATABASE($config["database"]);

require "router.php"; 

// Izveido mapi views tajā var ielikt component un controllerss.