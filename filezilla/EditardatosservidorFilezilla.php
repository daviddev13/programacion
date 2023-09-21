<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Editar datos en servidor remoto con Filezilla</h2>
<div class="container" style="width: 46rem;">

<ul>
	<li><p style="margin-bottom: 0cm">Conectarse al servidor remoto</p>
	<li><p style="margin-bottom: 0cm">Una vez conectado Filezilla se
	divide en dos, una parte izquierda donde se seleccionan los archivos
	a subir y otra parte derecha donde están los archivos ya subidos
	con su fecha (buscar carpeta public_html) para subirlos solo se
	arrastra el archivo en la url especifica.</p>
</ul>
<p style="margin-bottom: 0cm"><br/>

</p>
<p style="margin-bottom: 0cm"><b>OJO: </b>
</p>
<ul>
	<li><p style="margin-bottom: 0cm">La modificaciones a la APP debe
	hacerlas en local y luego subirlas por Filezilla si realiza las
	modificaciones por Cpanel no quedaran datos guardados localmente y
	la aplicación local sera diferente a la aplicación en la red o
	servidor remoto.</p>
</ul>

</div>
<div class="col-md-4 mx-auto">
<a href="../filezilla.php" class="btn btn-success" role="button" >Regresar al Menu</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>