<?php 
    class Validator {
        public static function string($value, $min = 1, $max = INF) {
            $value = trim($value);

            return is_string($value)
                    && strlen($value) >= $min // starlen izvada vērtības garumu
                    && strlen($value) <= $max;
        }
        public static function number($value, $min = 1, $max = INF) {
            $value = trim($value); // trim noņematstarpes

            return is_string($value) // pārbauda vai vērtība mainīgajā ir teksts
                    && $value >= $min
                    && $value <= $max;
        }
    }
    // static pieder klasei nevis objektam.  
?>