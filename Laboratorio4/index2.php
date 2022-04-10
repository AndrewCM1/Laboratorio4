<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratorio 4</title>
	<link rel="stylesheet" href="style.css">

   
    <div class="container">
    	<div class="text">
    		<h1>Laboratorio 4</h1>
    	</div>
    	<div class="image">
    		<img src="img/foto.png" height="200px">
    	</div>
    </div>
</head>
<body>
	<div class="col-sm">
	
	<nav class="menu">
            <a href="index.php">Ejercicio 1</a>
            <a href="index2.php">Ejercicio 2</a>
            <a href="index3.php">Ejercicio 3</a>
            <a href="index4.php">Ejercicio 4</a>
          
        </nav>
	
	
    </div>
	<footer>
    <section class="contacto">
        <div class="contenedor">
            <div class="footer-textos">
                <h4>#2</h4>
               
            </div>
            <form action="" class="formulario" method="POST">
                <div class="container">
                    <h4>Escribir un programa en el cual se tome por URL cuatro números, calcular y mostrar la suma de los dos primeros y el producto del tercero y el cuarto.</h4>
                    <br>
            
    <div class="col-sm">
    	<br>
    	<?php 
    
    	$valor1 = $_GET["numero1"];
    	$valor2 = $_GET["numero2"];
    	$valor3 = $_GET["numero3"];
    	$valor4 = $_GET["numero4"];
  
 
    	if ($valor1 > $valor2) {
    		echo "<h4>Suma: ".$valor1 + $valor2.", Resta: ".$valor3 - $valor4."</h4>";
    	}
    
    	
    	echo "<h4>Suma: ".$valor1 + $valor2.", Multiplicación: ".$valor3 * $valor4."</h4>";

    	?>
   
    	<br>
    	<a href="?numero1=2&numero2=4&numero3=6&numero4=12">Click (Resultados)</a>
    	<br>

    </div>
</body>