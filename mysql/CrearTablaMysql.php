<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Crear tabla en MySQL</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%">Para crear una tabla en MySQL se procede
así:</p>
<ol>
	<li><p align="left" style="line-height: 100%">Se selecciona la BD
	Dónde se creara la tabla</p>
	<li><p align="left" style="line-height: 100%">Se ejecuta el
	siguiente comando:</p>
</ol>
<p style="line-height: 100%; margin-bottom: 0cm"><i>CREATE TABLE
NomTabla (NomColumna1 TipoDato (Tamaño) NOT NULL, NomColumna2
TipoDato (Tamaño));</i></p>
<p style="line-height: 100%; margin-bottom: 0cm">Dónde:</p>
<ul>
	<li><p style="line-height: 100%; margin-bottom: 0cm">NomTabla=
	Nombre de la tabla a crear.</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">NomColumna=Nombre
	de cada columna de la tabla (Una tabla en una BD no es más que una
	matriz con columnas y filas por lo que NomColumna es solo como se
	llamara cada columna de la matriz).  
	</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">TipoDato=Datos
	que permitirá la columna. Por ejemplo INT = números enteros, para
	ver más ver tipos de datos en las tablas de MySQL.</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">Tamaño =
	Almacenamiento que soportara cada elemento de la columna.</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">NOT NULL=
	atributo que se coloca  para especificar que cuando se llene dicho
	espacio no pueda ser vacío. 
	</p>

</ul>
<p>
	<b>Ojo:</b> Siempre
al crear una tabla colocar una primera columna que sea el
identificador de cada fila y así al trabajar con los datos de la
tabla es más fácil, para ello utilice el siguiente comando al crear
la tabla:</p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><span lang="en-US"><i>NomColumna
INT (13) </i></span><code><font face="Calibri, sans-serif"><span lang="en-US"><i>NOT
NULL </i></span></font></code><span lang="en-US"><i>AUTO_INCREMENT
PRIMA</i></span><span lang="en-US"><i>R</i></span><span lang="en-US"><i>Y
KEY</i></span></p>
<p style="line-height: 100%; margin-bottom: 0cm">Dónde:</p>
<ul>
	<li><p style="line-height: 100%; margin-bottom: 0cm">NomColumna=
	Nombre de la columna por ejemplo identificador</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">INT= Tipo de
	dato que tendrá la columna generalmente se coloca en la columna
	identificador un entero de 13</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">AUTO_INCREMENT=
	Comando que va después del tipo de dato y especifica que dicha
	columna se llenara sola con un entero (INT) incrementado en 1 a
	medida que se guarde un nuevo dato.</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">PRIMARY KEY=
	Comando que le dice a MySQL que utilice el dato guardado en la
	columna como el identificador principal para seleccionar dicho dato
	en un futuro.</p>
</ul>


</div>
<div class="col-md-4 mx-auto">
<a href="../mysql.php" class="btn btn-success" role="button" >Regresar a Menu Mysql</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>