<?php
require "function/fancions.php";
require "function/Database.php";

$config = require("config.php");

$db = new DATABASE($config["database"]);

require "router.php";