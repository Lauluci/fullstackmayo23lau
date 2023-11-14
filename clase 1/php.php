<?php

//https.php.net/manual/en/mysqli-result.fech-assoc.php
//me conecto a una base de datos
$mysqli =mysqli_connect(
"localhost",
    "aplicacion",
    "aplicacion",
    "aplicacion"
);
$peticion ="SELECT * FROM usuarios";
$resultado = mysqli_query($mysqli, $peticion);
while ($fila = mysqli_fetch_assoc($resultado)){
    echo "El nombre de usuario es: ".$fila['nombredeusuario']."<br>";
        echo "El mail de usuario es: ".$fila['mail']."<br>";
        echo "<hr>";
}
















//php no se acuerda de las variables cuando vas a continuar en otra pagina, es por eso que necesitas recordale con: session_star() $_SESSION ['edad']=45...las variables normaales no se van a recordar pero las variables de session si...pero la pagina de destino, para que aparezca, tiene que arrancar con session_star() echo $_SESSION ['edad'];

    echo "Te voy a decir tu nombre";
    echo "<br>";
//$_GET = se va a leer dirctamente de la url //
    echo $_GET['nombre'];
?>
//estructura de control:for//  cuidado bucle while que hay decirle que es dia primero $dia=1; while($dia<31)//


<?php
 for($dia = 1;$dia<=31;$dia++){
     echo "hoy es el dia".$dia."del mes<br>";
 }
?>


// estructura copndicional
<?php
 $diadelasemana="lunes";
  switch($diadelasemana) {
      case "lunes":
          echo "hoy es el peor dia de la semana";
          break;
      case "martes":
          echo "hoy es el peor dia de la semana";
          break;
     case "miercoles":
          echo "hoy es el peor dia de la semana";
          break;
     case "jueves":
          echo "hoy es el peor dia de la semna";
          break;
     case "viernes":
          echo "hoy es el peor dia de la semna";
          break;
     case "sabado":
          echo "hoy es el peor dia de la semna";
          break;
     case "domingo":
          echo "hoy es el peor dia de la semna<br>";
          break;
  }                                         ?>                                                                 
   <?php
       $edad=45;
    if($edad<30){
        echo "todavia eres joven";
    }  else{
        echo "ya no eres tan jooven<br>";
    }  
        
                                                                                                             
     ?>                           
                                                                                                             