<!DOCTYPE html >
<html >

<head>
<title> Probando PHP en nuestro Servidor</title>

</head>

<body>

<h1> Caculos de dos numeros</h1>

<?php 

$x= 144;
$y=999;
$suma= $x + $y;
$resta= $x - $y;
$division = $x / $y;
$multiplicacion= $x * $y;

echo 'La suma es:', $suma,'<p>  </p>';
echo 'La resta es:',$resta,'<p>  </p>';
echo 'La division es:',$division,'<p>  </p>';
echo 'La multiplicacione es:',$multiplicacion;

?>


</body>
</html>
