<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Actualizar Node</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%; margin-bottom: 0cm">
Para actualizar node se utiliza el programa NVM (Node Version
Manager). En linux NVM se instala descargando el script de NVM
manualmente a travez de la terminal con el comando:</p>
<pre style="text-align: left; margin-bottom: 0.5cm"><i>curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.1/install.sh | bash</i></pre><p style="line-height: 100%; margin-bottom: 0cm">
Para usar NVM en consola se activan las variables de entorno con el
comando:</p>
<pre style="text-align: center"><code><i>source ~/.bashrc</i></code></pre><p style="line-height: 100%; margin-bottom: 0cm">
Para verificar el correcto funcionamiento de NVM se usa el comando:</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><i>nvm
--version</i></p>
<p style="line-height: 100%; margin-bottom: 0cm">Ahora ya se puede
instalar la version de Node que se quiera con el comando:</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><i>nvm
install </i><i>Numero_de_la_version_Node</i></p>

</div>
<div class="col-md-4 mx-auto">
<a href="../node.php" class="btn btn-success" role="button" >Regresar a Menu Node</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>