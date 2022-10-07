<?php 

    $numero1=$_POST['valor1'];
    $numero2=$_POST['valor2'];

    is_numeric($numero1);
    is_numeric($numero2);

    $suma=$numero1+$numero2;

    echo $suma;
?>

