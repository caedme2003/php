<!DOCTYPE html >
<html >

<head>
<title> Probando PHP en nuestro Servidor</title>

</head>

<body>

<h1> Taza de Cambio</h1>

<?php
$agenda=array
(
"Carlos" =>array
   (
   "nombre"=>"Carlos",
   "apellidp"=>"medina",
   "telefono"=>"809-333-8785"
   ),
"ivana" =>array
   (
    "nombre"=>"Beatriz",
    "apellidp"=>"Cabral",
    "telefono"=>"809-454-7875"
   ),
"ismael" =>array
   (
    "nombre"=>"Ismael",
    "apellidp"=>"Camilo",
    "telefono"=>"829-787-3564"
    )
);
echo $agenda["ismael"]["telefono"] //Saca en pantalla: "telefono"
?>


</body>
</html>