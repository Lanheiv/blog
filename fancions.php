<?php
// Dump and die
function dd($x) {
    echo "<pre>";
    print_r($x);
    echo "</pre>";
    die();
}
