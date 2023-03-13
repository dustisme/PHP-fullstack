<?php
    class Triangle extends Shape {
          //mètode classe
          public function area() {
            $area = $this->height * $this->base/ 2;
            return $area;
          }
    }
?>