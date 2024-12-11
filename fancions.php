<?php
// Dump and die, izmanto programmētāji lai redzētu rezultātu.
function dd($x) { // $x ir arguments // dd funkcijas nosaukums
    echo "<pre>";
    print_r($x);
    echo "</pre>";
    exit();
}
