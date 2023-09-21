<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Instalación de Módulos de Node</h2>
<div class="container" style="width: 46rem;">


<p style="line-height: 100%; margin-bottom: 0cm">Para instalar los
módulos de Node se puede de dos formas:</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<ol>
	<li><p style="line-height: 100%; margin-bottom: 0cm">Instalando cada
	módulo al abrir una consola desde la carpeta del proyecto y
	ejecutar el comando:</p>
	<p style="line-height: 100%; margin-bottom: 0cm"></p>
</ol>
<p align="center" style="line-height: 100%; margin-left: 1.27cm; margin-bottom: 0cm">
<i>npm install NomModulo</i></p>
<p align="center" style="line-height: 100%; margin-left: 1.27cm; margin-bottom: 0cm">
<br/>

</p>
<ol start="2">
	<li><p style="line-height: 100%; margin-bottom: 0cm">Colocando todos
	los módulos necesarios del proyecto en el archivo package.json y
	por una consola desde la carpeta del proyecto ejecutar el comando:</p>
	<p style="line-height: 100%; margin-bottom: 0cm"></p>
</ol>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"> <i>npm
install</i></p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p style="line-height: 100%; margin-bottom: 0cm"><b>OJO:</b> Al
instalar módulos en Node automáticamente aparecerá una nueva
carpeta en el esqueleto del proyecto llamada node_modules la cual
contiene todos los archivos para que funcione el modulo instalado.</p>

</div>
<div class="col-md-4 mx-auto">
<a href="../node.php" class="btn btn-success" role="button" >Regresar a Menu Node</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>