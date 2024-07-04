<?php

class Bmidexer {
    public function calculateBMI($height, $weight) {
        return ($weight / ($height * $height)) * 10000;
    }
}

// PHP equivalent of the HealthAnalyzer class and analyzeBmi function
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

// PHP equivalent of the HumanBeing class
class HumanBeing {
    private $height;
    private $weight;
    private $bmi;

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getBmi() {
        return $this->bmi;
    }

    public function setBmi($bmi) {
        $this->bmi = $bmi;
    }

    public function calculateBMI() {
        $bi1 = new Bmidexer();
        $this->setBmi($bi1->calculateBMI($this->getHeight(), $this->getWeight()));
    }

    public function analyzeBmi() {
        $ha = new HealthAnalyzer();
        return $ha->analyzeBmi($this->getBmi());
    }
}
?>