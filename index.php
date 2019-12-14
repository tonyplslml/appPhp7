<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XA</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.php">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href="#">Otros Ejemplos Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Cálcular la velocidad y la altura</h2>
  <p>Descripción:</p>
  <p>Una maceta cae desde la azotea de un edificio y tarda en llegar al suelo 7 segundos <br>
a)Calcular la altura del edificio <br>
b)Obtener la magnitud de la velocidad final <br>
</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
   h=(1/2)*gt2 v=v0+g
</section>
<section class="datos">
<h2>Datos:</h2>
   gravedad = g = 9.8(m/s)2 <br>
            v0= v = 0 <br>
            tiempo = t = 7s <br>
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>La alturaa es:<br>
              h=(4.9)*(7)(7)<br>
              La velocidad es:<br>
              v=0+(9.8)*(7)
            </p>
</section>
<?php
     function calcula_altura(){
        $gravedad=9.8;
        $tiempo= 7;
        $v0= 0;
        $resul= $gravedad*$tiempo*$tiempo/2;
        $altura=$resul;
        return $altura;
     }
     function calcula_velocidad(){
     $gravedad=9.8;
     $tiempo= 7;
     $v0= 0;
     $velocidad=$gravedad*$tiempo;
     return $velocidad;
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> resultado: altura = ".calcula_altura(). " m/s</h1>";
 print "<h1> resultado: velocidad = ".calcula_velocidad(). " m/s</h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>