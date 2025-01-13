<?php 

$uri = parse_url($_SERVER["REQUEST_URI"]) ["path"];

if ($uri == "/") {
    require "controllers/index.php";
} elseif ($uri == "/list"){
    require "controllers/list.php";
} // RewriteCon in .