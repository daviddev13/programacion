<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Alistar archivos a subir con Git</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%; margin-bottom: 0cm">Para subir archivos
a través de Git primero adicionarlos a los archivos listos de Git (Stage)
desde una consola ubicada en la carpeta principal del
proyecto con el comando:</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><i>git
add urlArchivo.extension</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subir cambios a staging</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p align="left" style="font-variant: normal; font-style: normal; line-height: 100%; margin-bottom: 0cm">
<b>Ejemplos:</b></p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<ol>
	<li><p align="left" style="font-variant: normal; font-style: normal; line-height: 100%; margin-bottom: 0cm; background: transparent; text-decoration: none">
	Si se quiere adicionar todos los archivos del proyecto
	se utiliza como urlArchivo un punto así:</p>
	<p align="center" style="line-height: 100%; margin-bottom: 0cm; background: transparent">
	<i>git add .</i></p>
	<p align="center" style="line-height: 100%; margin-bottom: 0cm; background: transparent">
	</p>
	<li><p align="left" style="font-variant: normal; font-style: normal; line-height: 100%; margin-bottom: 0cm; background: transparent">
	Si se quiere adicionar la carpeta de producción de la parte
	Front-end (build) se especifica en urlArchivo la ubicación de la
	carpeta así:</p>
	<p align="left" style="font-variant: normal; font-style: normal; line-height: 100%; margin-bottom: 0cm; background: transparent">
	</p>
</ol>
<ul>
	<p align="center" style="line-height: 100%; margin-bottom: 0cm; background: transparent">
	<i>git add carpetaFrontend/build</i></p>
</ul>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><b>OJO:</b>
Para revisar la correcta adición a los archivos listos de Git se usa
el comando</p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><i>git
status</i></p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>

</div>
<div class="col-md-4 mx-auto">
<a href="../git.php" class="btn btn-success" role="button" >Regresar a Menu Git</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>