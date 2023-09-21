<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Modificar columnas de una tabla en MySQL </h2>
<div class="container" style="width: 46rem;">


<p style="line-height: 100%; margin-bottom: 0cm">Para modificar las
columnas de una tabla en MySQL se utiliza el comando ALTER TABLE que
permite escribir el nombre de la tabla a modificar, pero hay que
especificarle el tipo de alteración que se quiere hacer así:</p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"> <span lang="es-ES"><i>ALTER</i></span><i>
TABLE NomTabla TIPOALTERACION NomColumna</i></p>
<p style="line-height: 100%; margin-bottom: 0cm">Dónde:</p>
<ul>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm">TIPOALTERACION=
	comandos que permiten adicionar, eliminar, cambiar columnas, etc. a
	continuación se muestran los principales alteraciones de tablas en
	MySQL:</p>
</ul>
<table width="368" cellpadding="4" cellspacing="0">
	<col width="81"/>

	<col width="82"/>

	<col width="179"/>

	<tr valign="top">
		<td width="81" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="center">
			Alteración</p>
		</td>
		<td width="82" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="center">
			Uso</p>
		</td>
		<td width="179" style="border: 1px solid #000000; padding: 0.1cm"><p align="center">
			Ejemplo</p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="81" height="102" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			ADD</p>
		</td>
		<td width="82" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			Adicción de columnas</p>
		</td>
		<td width="179" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p align="left" style="margin-bottom: 0cm">
			Adicionar un número identificador principal para la columna
			llamada id</p>
			<p style="margin-bottom: 0cm"><br/>

			</p>
			<p lang="en-US" align="left" style="margin-bottom: 0cm"><i>ALTER
			TABLE NomTabla ADD PRIMARY KEY (id);</i></p>
			<p lang="en-US" style="margin-bottom: 0cm"><br/>

			</p>
			<p align="left" style="margin-bottom: 0cm">Adicionar una nueva
			columna llamada xyz que permita el ingreso de letras y una
			capacidad de almacenamiento de 5 bytes</p>
			<p style="margin-bottom: 0cm"><br/>

			</p>
			<p align="left"><i>ALTER TABLE NomTabla ADD xyz VARCHAR(5);</i></p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="81" height="43" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			DROP</p>
		</td>
		<td width="82" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			Borrar columnas</p>
		</td>
		<td width="179" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p style="margin-bottom: 0cm">
			Borrar la columna xyz</p>
			<p style="margin-bottom: 0cm"><br/>

			</p>
			<p><i>ALTER TABLE NomTabla DROP xyz;</i></p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="81" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><pre style="text-align: left"><code><font face="Calibri, sans-serif"><font size="2" style="font-size: 11pt">CHANGE COLUMN</font></font></code></pre>
		</td>
		<td width="82" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			Cambiar columnas</p>
		</td>
		<td width="179" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p style="margin-bottom: 0cm">
			<code><font face="Calibri, sans-serif">Cambiar la columna xyz por
			la columna abc que tiene las  características:</font></code></p>
			<p style="margin-bottom: 0cm"><br/>

			</p>
			<ul>
				<li><p align="left" style="margin-bottom: 0cm"><code><font face="Calibri, sans-serif">Solo
				recibe números enteros de tamaño máximo 11 bytes</font></code></p>
				<li><p align="left" style="margin-bottom: 0cm"><code><font face="Calibri, sans-serif">No
				puede tener un número vacío</font></code></p>
				<li><p align="left" style="margin-bottom: 0cm"><code><font face="Calibri, sans-serif">Por
				defecto inicia en cero.</font></code></p>
			</ul>
			<pre style="text-align: left">
<code><font face="Calibri, sans-serif"><font size="2" style="font-size: 11pt"><span lang="en-US"><i>CHANGE COLUMN</i></span></font></font></code>
<code><font face="Calibri, sans-serif"><font size="2" style="font-size: 11pt"><span lang="en-US"><i>xyz abc INT(11) NOT NULL DEFAULT 0 ;</i></span></font></font></code></pre>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="81" height="26" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<code><font face="Calibri, sans-serif">MODIFY  </font></code>
			</p>
		</td>
		<td width="82" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<code><font face="Calibri, sans-serif">Modificar tipo de columna</font></code></p>
		</td>
		<td width="179" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p align="left" style="margin-bottom: 0cm">
			<code><font face="Calibri, sans-serif">Modificar las
			características a la columna llamada xyz:</font></code></p>
			<ol>
				<li><p align="left" style="margin-bottom: 0cm"><code><font face="Calibri, sans-serif">No
				puede ser un dato vacío</font></code></p>
				<li><p align="left" style="margin-bottom: 0cm"><code><font face="Calibri, sans-serif">Permitir
				cadenas de texto de tamaño 200 bytes.  </font></code>
				</p>
			</ol>
			<p align="left" style="margin-left: 0.64cm; margin-bottom: 0cm"><br/>

			</p>
			<p align="left"><code><font face="Calibri, sans-serif"><span lang="en-US"><i>MODIFY
			 xyz VARCHAR (200)  NOT NULL;</i></span></font></code></p>
		</td>
	</tr>
</table>
<h3 class="western" style="line-height: 100%; margin-top: 0cm; margin-bottom: 0.42cm">
</h3>
<h3 class="western" style="line-height: 100%; margin-top: 0cm; margin-bottom: 0.42cm">
<code><font face="Calibri, sans-serif"><b>
	



</div>
<div class="col-md-4 mx-auto">
<a href="../mysql.php" class="btn btn-success" role="button" >Regresar a Menu Mysql</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>