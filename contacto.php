<?php
$n=$_POST["em"];
$em=$_POST["n"];

$xn="nombres".$n;
$xe="renacer710@gmail.com";
mail($xe,"contacto",$n);
include("C:\Users\GORDO\Desktop\moon\index.html");
?>