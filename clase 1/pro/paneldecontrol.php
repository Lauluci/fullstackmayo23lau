<? php
     session_start();
     if(!isset($_SESSION['llave'])){die("te has intentado colar"); }
  ?>
<!doctype html>
<html lang= "es">
      <head>
         <tittle>panel de control</tittle>
         <meta charset="utf 8">
         <link rel="stylesheet" href="estilo/paneldecontrol.css">
      </head>
      <body>
          <header>
              <img src="img/logo.png" id="logo">
              <h1>Panel de control </h1>
          </header>
          <nav>
             <ul>
                 <li>Entradas</li>
             </ul>
          </nav>
          <section>
              <h2>Entradas</h2>
              <div class="caja">
                  <table>
                      <thead>
                          <tr>
                              <th> Identificador </th>
                              <th>Imagen</th>
                            <th>Fecha</th><th>Titulo</th><th>Texto</th>
                             <th>Usuario</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                                 $mysqli = mysqli_connect(
                                    "localhost",
                                    "aplicacion",
                                     "aplicacion",
                                    "aplicacion"
                                    );
                                   $peticion ="
                                 SELECT 
                                 *
                                 FROM
                                 entradas";
                             $resultado = mysqli_query($mysqli, $peticion);
                            while ($fila = mysqli_fetch_assoc($resultado)){
                            echo '
                                  <tr>
                                    <td>'.$fila['Identificador'].'</td>
                                    <td>'.$fila['imagen'].'</td>
                                    <td>'.$fila['fecha'].'</td>
                                    <td>'.$fila['texto'].'</td>
                                    <td>'.$fila['titulo'].'</td>
                                    <td>'.$fila['FK_usuarios_nombrereal'].'</td>
                                    </tr>
                                    ';
}
                          ?>
                      </tbody>
                  </table>
              </div>
          </section>
      </body>
</html>
