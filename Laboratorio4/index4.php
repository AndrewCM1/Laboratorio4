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
                <h4>#4</h4>
               
            </div>
            <form action="" class="formulario" method="POST">
                <div class="container">
                    <h4>	Se cargan por GET tres números distintos. Mostrar por pantalla el mayor de ellos.</h4>
                    <br>
            
    <div class="col-sm">
    	<br>
    	<?php 
    
    	$x = $_GET["numerox"];
    	$y = $_GET["numeroy"];
    	$z = $_GET["numeroz"];

    
    
    	if ( $x > $y && $x > $z) {
    		echo "<h4>mayor número es: ".$x."</h4>";
    	}
    	if ( $y > $x  && $y > $z) {
    		echo "<h4>mayor número es: ".$y."</h4>";
    	}
    	if ( $z > $x  && $z > $y) {
    		echo "<h4>mayor número es: ".$z."</h4>";
    	}
    	?>
    	<a href="?numerox=888666666666888&numeroy=55555555555555&numeroz=663">Click (Resultados)</a>
    	<br>
    

    </div>
</body>