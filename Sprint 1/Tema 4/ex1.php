<!-- Crea una classe Employee, defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a
paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no
impostos (si el sou supera 6000, paga impostos). -->
<html>

<head>
    <title>Exercici 1</title>
</head>

<body>



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

    class main
    {
    }
    $emp1 = new Employee();
    $emp1->initialize("Joel", 1700);
    $emp1->print();

    $emp2 = new Employee();
    $emp2->initialize("Ellie", 2500);
    $emp2->print();

    ?>
</body>

</html>