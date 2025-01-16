<?php 

class Validator {
    public function string($value, $min = 1, $max = INF) {
        $value = trim($value);

        return is_string($value)
                && strlen($value) >= $min
                && strlen($value) <= $max;

        /* if (is_string($value) && strlen($value) >= $min && strlen($value) <= $max) {
            return true;
        } else {
            return false;
        } */
    }
    public function number($value, $min = 1, $max = INF) {
        $value = trim($value);

        return is_string($value)
                && $value >= $min
                && $value <= $max;
    }
}