<!-- Escriu un programa que defineixi una classe Shape amb un
constructor que rebi com a paràmetres l'ample i alt. Defineix
dues subclasses; Triangle i Rectangle que heretin de Shape 
i que calculin respectivament l'àrea de la forma area().

A l'arxiu main defineix dos objectes, un triangle i un rectangle 
i truca al mètode area de cadascun. -->

<?php
    $triangle = new Triangle(45, 76);
    $triangle->area();
    $rectangle = new Rectangle(56, 13);
    $rectangle->area();

?>