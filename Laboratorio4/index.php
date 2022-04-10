<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratorio4Andrew</title>
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
                <h4>#1</h4>
               
            </div>
            <form action="" class="formulario" method="POST">
                <div class="container">
                    <h4>Escribir un programa que permita cargar el nombre de un usuario y su mail por teclado. Mostrar posteriormente los datos en la página HTML.</h4>
                    <br>
            
    <div class="col-sm">
    	<br>
    	<?php 
    	$nombr = $_GET["nombre"];
    	$corr = $_GET["correo"];
  
    	echo "<h4>HolaSeñor ".$nombr.", su presente correo es: ".$corr."</h4>";
    	
    	?>
    
    	<br>
        <a href="?nombre=Andrew&correo=Andrew@gmail.com">Click (Resultados)</a>

    </div>
</body>