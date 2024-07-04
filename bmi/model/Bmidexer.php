<?php
class Bmidexer {
    public function calculateBMI($height, $weight) {
        return ($weight / ($height * $height)) * 10000;
    }
}
?>