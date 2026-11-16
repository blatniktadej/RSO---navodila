<?php
require "poveza.php";

$ime=$_POST["ime"];
$priimek=$_POST["priimek"];
$email=$_POST["email"];
$sporocilo=$_POST["sporocilo"];

$stavek=$povezava->prepare( 
    "INSERT INTO prijave(ime,priimek,email,sporocilo) VALUES (?,?,?,?)"
    );
$stavek->bind_param("ssss",$ime,$priimek,$email,$sporocilo);

if($stavek->execute()){
    echo "<p>Prijava je uspela</p>";
}
else{
    echo"<p>Prijava ni uspela</p>";
}
$stavek->close();
$povezava->close();
?>