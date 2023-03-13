<?php
    class Rectangle extends Shape {
          //mètode classe
          public function area() {
            $area = $this->height * $this->base;
            return $area;
          }
    }
?>