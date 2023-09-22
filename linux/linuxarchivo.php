<?php include('../includes/header.php'); ?>
<?php
if (isset($_GET['parte'])) {
    $parte = $_GET['parte'];
    if ($parte == 0) {
        printf('
        <h2 style="text-align: center;">Ver Archivos</h2><br>
        <br style="line-height: 2em;"> <!-- Doble espacio -->
        <div class="card" style="width: 50rem;">
          <div class="card-body">
        <div>
            <p style="display: inline-block; text-align: left;">
            ls &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; listar archivos sin lista
            </p>
        </div>
        <div>
            <p style="display: inline-block; text-align: left;">
            ls -a &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; listar todo archivo sin lista
            </p>
        </div>
        <div>
            <p style="display: inline-block; text-align: left;">
            ls -al &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; listar todo archivo (normales + ocultos) en lista
            </p>
        </div>
        </div>
        </div>
        ');
    } elseif ($parte == 1) {
        printf('
        <h2 style="text-align: center;">Hacer/Copiar/Mover archivos</h2><br>
        <br style="line-height: 2em;"> <!-- Doble espacio -->
        <div class="card" style="width: 50rem;">
          <div class="card-body">
        <div>
            <p style="display: inline-block; text-align: left;">
            touch archivo.extension &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crear archivo vacio
            </p>
        </div>
        <div>
            <p style="display: inline-block; text-align: left;">
            rm archivo.extension &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Eliminar archivo (remove)
            </p>
        </div>
        <div>
            <p style="display: inline-block; text-align: left;">
            cp  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; copiar un archivo a otro
            </p>
        </div>
        <div>
            <p style="display: inline-block; text-align: left;">
            mv  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mover archivos de una ubicacion a otra 
            </p>
        </div>
        </div>
        </div>      
        ');
    } elseif ($parte == 2) {
        printf('
        <h2 style="text-align: center;">Abrir archivos</h2><br>
        <br style="line-height: 2em;"> <!-- Doble espacio -->
        <div class="card" style="width: 50rem;">
          <div class="card-body">
        <div>
            <p style="display: inline-block; text-align: left;">
            code nombrr.txt &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; abrir codigo en vsc
            </p>
        </div>
        <div>
            <p style="display: inline-block; text-align: left;">
            cat archivo.extension &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; muestra archivo en consola
            </p>
        </div>
        </div>
        </div>
        ');
    } elseif ($parte == 3) {
        printf('
        <h2 style="text-align: center;">Enlaces/url o ubicaciones</h2><br>
        <br style="line-height: 2em;"> <!-- Doble espacio -->
        <div class="card" style="width: 50rem;">
          <div class="card-body">
        <div>
            <p style="display: inline-block; text-align: left;">
            pwd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Enlace actual de ubicacion
            </p>
        </div>
        <div>
            <p style="display: inline-block; text-align: left;">
            cd/ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cambiar directorio (volver al home)
            </p>
        </div>
        <div>
            <p style="display: inline-block; text-align: left;">
            ~ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; variable con la url del home
            </p>
        </div>
        <div>
        <p style="display: inline-block; text-align: left;">
        cd/mnt/letradiscoduro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cambiar disco duro
        </p>
    </div>
    <div>
        <p style="display: inline-block; text-align: left;">
        cd . &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; carpeta actual
        </p>
    </div>
    <div>
    <p style="display: inline-block; text-align: left;">
    cd .. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; regresar una carpeta
    </p>
        </div>
        </div>
        </div>
        ');
    }elseif ($parte == 5) {
        printf('
        <h2 style="text-align: center;">Carpetas</h2><br>
        <br style="line-height: 2em;"> <!-- Doble espacio -->
        <div class="card" style="width: 50rem;">
          <div class="card-body">
        <div>
            <p style="display: inline-block; text-align: left;">
            cd U + tab  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; todas las carpetas que tienen U
            </p>
        </div>
        <div>
            <p style="display: inline-block; text-align: left;">
            mkdir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; make directory nueva carpeta
            </p>
        </div>
        </div>
        </div>
        ');
    }elseif ($parte == 6) {
        printf('
        <h2 style="text-align: center;">Limpiar consola</h2><br>
        <br style="line-height: 2em;"> <!-- Doble espacio -->
        <div class="card" style="width: 50rem;">
          <div class="card-body">
        <div>
            <p style="display: inline-block; text-align: left;">
            ctrl + E  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; limpiar consola
            </p>
        </div>
    
        </div>
        </div>
        ');
    }elseif ($parte == 7) {
        printf('
        <h2 style="text-align: center;">Resumir comando largo</h2><br>
        <br style="line-height: 2em;"> <!-- Doble espacio -->
        <div class="card" style="width: 50rem;">
          <div class="card-body">
    
        <div>
            <p style="display: inline-block; text-align: left;">
            alias NomVariable="comando"  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Alias resume un comando largo en linux
            </p>
        </div>
        </div>
        </div>
        ');
    }elseif ($parte == 8) {
        printf('
        <h2 style="text-align: center;">Ver historia de comandos</h2><br>
        <br style="line-height: 2em;"> <!-- Doble espacio -->
        <div class="card" style="width: 50rem;">
          <div class="card-body">
    
        <div>
            <p style="display: inline-block; text-align: left;">
            history  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  historia de comandos utilizados
            </p>
        </div>
        <div>
            <p style="display: inline-block; text-align: left;">
            comando --help   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   ayuda sobre comando
            </p>
        </div>
        <div>
            <p style="display: inline-block; text-align: left;">
            !#comando  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  repetir comando del history
            </p>
        </div>
        </div>
        </div>
        ');
    }
    else {
        echo 'Parte no válida';
    }
} else {
    echo 'Por favor, selecciona una parte.';
}

?>
<div class="col-md-4 mx-auto">
<a href="../linux.php" class="btn btn-success" role="button" >Regresar a Menu</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>