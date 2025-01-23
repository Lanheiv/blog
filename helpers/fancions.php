<?php
// Dump and die, izmanto programmētāji lai redzētu rezultātu.
function dd($x) { // $x ir arguments // dd funkcijas nosaukums
    echo "<pre>";
    print_r($x);
    echo "</pre>";
    exit(); 
}
function redirectIfNotFound($location = "/") {
    http_response_code(404);
    header("Location: $location", 302);
    exit();
}