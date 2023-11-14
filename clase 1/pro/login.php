<?php
   session_start();
//compruebo que recibo datos del formulario
    echo "comprobacion de usuario:<br>";
    echo "Usuario:".$_POST['usuario']."<br>";
    echo "contraseña:".$_POST['contrasena']."<br>";
//almaceno los datos en variables
$usuario= $_POST['usuario'];
$contrasena= $_POST['contrasena'];

//me conecto a la base de datos
$mysqli =mysqli_connect(
"localhost",
    "aplicacion",
    "aplicacion",
    "aplicacion"
);
//selecciono los usuarios
$peticion ="
       SELECT 
       *
       FROM 
       usuarios";
$resultado = mysqli_query($mysqli, $peticion);
$pasas = false;
//para cada registro de la base de datos
while ($fila = mysqli_fetch_assoc($resultado)) {
    //compruebo si los datos de la base de datos coinciden con los del formulario
    if(
        $usuario == $fila['nombredeusuario']
         &&
        $contrasena == $fila['contrasena']
    ){
        //esto se ejecuta si coincide
        echo "el usuario coincide<br>";
        $pasas = true;
        $_SESSION['llave'] = true;
        header('Location: paneldecontrol.php');
        break;
    }else{
        //esto se ejecuta si no coincide
        echo "el usuario no coincide<br>";
         header('location: index.html');
    }
}
if ($pasas == true){
    echo"te voy a dar acceso al panel de control";
}else{
    echo"no te voy a dar acceso al panel de control";
}



?>