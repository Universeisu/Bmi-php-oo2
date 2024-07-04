<?php
class HealthAnalyzer {
    public function analyzeBmi($bmi) {
        if ($bmi <= 18.5) {
            return "Underweight";
        } elseif ($bmi <= 24.9) {
            return "Normal weight";
        } elseif ($bmi <= 29.9) {
            return "Overweight";
        } else {
            return "Obesity";
        }
    }
}
?>