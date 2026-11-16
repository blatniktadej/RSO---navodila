<?php
$streznik="localhost";
$uporabnik="root";
$geslo="";
$baza="rso_predavanja";

$povezava=new mysqli($streznik,$uporabnik,$geslo,$baza);


if($povezava->connect_error){
    die("Napaka pri povezavi:".$povezava->connect_error);
}
$povezava->set_charset("utf8mb4");
?>