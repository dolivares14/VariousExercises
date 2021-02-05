<?php
$cat1=$_POST['cat1'];
$cat2=$_POST['cat2'];
$hip=null;

$hip=sqrt(pow($cat1,2)+pow($cat2,2));
round($hip,3);
echo "El valor de la hipotenusa es de: ".$hip;
?>