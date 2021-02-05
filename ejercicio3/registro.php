<?php


function tab($info){
    foreach($info as $ele){
        echo '<td>'.$ele.'</td>';
    }
}

$nom=$_POST['nom'];
$ape=$_POST['ape'];
$ced=$_POST['ced'];
$suel=$_POST['suel'];
$dep=$_POST['dep'];
$lug=$_POST['lug'];
$info = array(1=>$nom,2=>$ape,3=>$ced,4=>$suel,5=>$dep,6=>$lug);
tab($info);

?>