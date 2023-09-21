<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Actualizar datos específicos en MySQL </h2>
<div class="container" style="width: 46rem;">

</b></font></h3>
<p style="line-height: 100%">MySQL también permite actualizar un
dato particular que está en x fila y n columna buscándolo a partir
de otra columna con el comando UPDATE así:</p>
<p align="left" style="line-height: 100%"><i>UPDATE NomTabla SET
NomColumna='NuevoDato' WHERE ColumBusqueda='DatoAntiguoAlmacenado';</i></p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm">Dónde:</p>
<ul>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm">SET:
	Fija el nuevo dato en la columna que se quiere.</p>
	<li><p align="left" style="line-height: 100%">WHERE: Selecciona las
	filas a las que se les quiere actualizar los datos, especificándole
	que busque en X columna el dato que ya está en la tabla almacenado.</p>
</ul>
<p style="line-height: 100%"><b>OJO:</b> SET con la coma (,) puede
fijar varios datos así:</p>
<p align="left" style="line-height: 100%; margin-bottom: 0.42cm">
<font face="Calibri, sans-serif">
	<font size="2" style="font-size: 11pt"><i>
		<span style="font-weight: normal">UPDATE
NomTabla SET NomColumna = ‘NuevoValor’, NomColumna2 =
‘NuevoValor2’ WHERE ColumBusqueda='’DatoAntiguoAlmacenado; 
</span></i></font></font><font color="#ffffff">
	<font face="Calibri, sans-serif">
		<font size="2" style="font-size: 11pt">
		<i><span style="font-weight: normal">W</span></i></font></font></font></p>



</div>
<div class="col-md-4 mx-auto">
<a href="../mysql.php" class="btn btn-success" role="button" >Regresar a Menu Mysql</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>