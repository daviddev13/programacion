<?php include('../includes/header.php'); ?>
<?php
if (isset($_GET['parte'])) {
    $parte = $_GET['parte'];
    if ($parte == 0) {
        printf("Archivos<br><br>ls                         listar archivos sin lista<br>ls -a                      listar todo archivo sin lista<br>ls -al                     listar todo archivo (normales + ocultos) en lista<br>");


    } elseif ($parte == 1) {
        echo 'touch archivo.extension    crear archivo vacio
        rm archivo.extension       remove eliminar archivo
        cp                         copiar un archivo a otro
        mv                         mover archivos de una ubicacion a otra';
    } elseif ($parte == 2) {
        echo 'abrir archivos

        code nombrr.txt            abrir codigo en vsc
        cat archivo.extension      muestra archivo en consola';
    } elseif ($parte == 3) {
      echo 'Enlaces

      pwd                               Enlace actual de ubicacion
      cd/                               cambiar directorio (volver al home)
      ~                                 variable con la url del home
      cd/mnt/letradiscoduro             cambiar disco duro
      cd .                              carpeta actual
      cd ..                             regresar una carpeta';
    }
    else {
        echo 'Parte no válida';
    }
} else {
    echo 'Por favor, selecciona una parte.';
}

?>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>