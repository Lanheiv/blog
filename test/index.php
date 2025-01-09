<?php
// Piemērs ļoti vienkāršam maršrutētājam
$request = $_SERVER['REQUEST_URI']; // Iegūstam URL ceļu

// Izslēdzam sākotnējo slīpsvītru un paplašinājumu (ja tāds ir)
$request = trim($request, '/');
$request = rtrim($request, '.php');

// Iespējamie ceļi un to attiecīgie faili
$routes = [
    'story' => 'story.php',
    'about' => 'about.php',
    'contact' => 'contact.php'
];

// Pārbauda, vai ceļš eksistē
if (array_key_exists($request, $routes)) {
    include $routes[$request]; // Iekļauj atbilstošo failu
} else {
    echo "404 - Lapa nav atrasta";
}
?>
