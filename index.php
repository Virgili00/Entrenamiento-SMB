<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v ">
    <title>Entrenamiento smb</title>
</head>
<body>
<?php 
include("conexion.php");
$conexion=conectar();


?>
<header class="navBar" >
    <div class="nombre">
        <img src="logo.png">
        <h1>ENTRENAMIENTO SMB</h1>
    </div>
    <div>
        <form action="index.php" method="POST">
            <input class="buscador" name="buscador" type="text" placeholder="Buscar crew">
            <button type="submit" name="enviar" action="index.php">BUSCAR</button>
        </form>
    </div>
    <nav>
        <a href="#">AGREGAR CREW</a> 
        <a href="#">TOMAR PCP</a>
    </nav>      
    
    </header>
    <div class="titulo">  
    <h2>CREWS</h2> 
</div>
<div class="tableContainer">
    
    <table class="table">
        
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>PCP</th>
        </thead>
        <tbody>
            <?php 
               buscador($conexion);
           
            ?>
            </tbody>
</table></div>
<footer class="footer"><div>
    Autor:Federico Agustin Virgilio
</div>
</footer>
</body>
</html>