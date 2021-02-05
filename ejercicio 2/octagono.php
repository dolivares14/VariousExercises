<?php
$lon=$_POST['lon'];
$area=null;

$area=4.83*pow($lon,2);
round($area,3);
echo "El valor del área es de: ".$area;
?>