<?php
    class Employee
    {
        //atributs
        private $name;
        private $wage;

        //mètodes classe
        public function initialize($nom, $sou)
        {
            $this->name = $nom;
            $this->wage = $sou;
        }

        public function print()
        {
            if ($this->wage >= 6000) {
                echo $this->name . " has de pagar impostos";
            } else {
                echo $this->name . " no has de pagar impostos";
            }
        }
    }
?>