<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Filtrar datos seleccionados de una tabla en MySQL </h2>
<div class="container" style="width: 46rem;">

</b></font></code></h3>
<p style="line-height: 100%; margin-bottom: 0cm"><code><font face="Calibri, sans-serif">Para
filtrar una selección de datos se adiciona el comando </font></code><code><font face="Calibri, sans-serif"><i>WHERE</i></font></code><code><font face="Calibri, sans-serif">
al comando para seleccionar datos así:</font></code></p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><code><font face="Calibri, sans-serif"><span lang="en-US"><i>SELECT
TipoSeleccion FROM NomTabla WHERE NomColumna =’xxx’</i></span></font></code></p>
<p style="line-height: 100%; margin-bottom: 0cm"><code><font face="Calibri, sans-serif">Dónde:</font></code></p>
<ul>
	<li><p style="line-height: 100%; margin-bottom: 0cm"><code><font face="Calibri, sans-serif">WHERE
	= Permite especificar la característica de selección por ejemplo
	seleccionar lo que contenga xxx en la columna llamada NomColumna.</font></code></p>
</ul>
<p style="line-height: 100%; margin-bottom: 0cm"><code><font face="Calibri, sans-serif"><b>OJO:</b></font></code><code><font face="Calibri, sans-serif">
Adicional al WHERE hay otros comandos que ayudan al filtrado de datos
como:</font></code></p>
<table width="408" cellpadding="4" cellspacing="0">
	<col width="57"/>

	<col width="64"/>

	<col width="117"/>

	<col width="135"/>

	<tr valign="top">
		<td width="57" height="9" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			Comando</p>
		</td>
		<td width="64" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			Ubicación</p>
		</td>
		<td width="117" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			Sirve para</p>
		</td>
		<td width="135" style="border: 1px solid #000000; padding: 0.1cm"><p align="left" style="margin-left: -0.64cm">
			       Ejemplo</p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="57" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			AND</p>
		</td>
		<td width="64" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			Después de  la  primera selección ( <code><font face="Calibri, sans-serif"><i>NomColumna
			=’xxx’)</i></font></code></p>
		</td>
		<td width="117" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			Validar dos datos al tiempo  en una sola  selección</p>
		</td>
		<td width="135" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p align="left">
			<code><font face="Calibri, sans-serif"><span lang="en-US"><i>SELECT
			* FROM NomTabla WHERE NomColum1</i></span></font></code><code><font color="#000000"><font face="Calibri, sans-serif"><span lang="en-US">='xxxx'
			AND NomColum2='yyyy';</span></font></font></code></p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="57" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<code><font face="Calibri, sans-serif">LIKE</font></code></p>
		</td>
		<td width="64" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<code><font face="Calibri, sans-serif">Después del WHERE</font></code></p>
		</td>
		<td width="117" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left" style="margin-bottom: 0cm">
			<code><font face="Calibri, sans-serif">Seleccionar datos con
			letras específicas o frases tipo</font></code><code><font face="Calibri, sans-serif"><span lang="es-ES">
			wildcard</span></font></code><code><font face="Calibri, sans-serif">.
			L</font></code><code><font face="Calibri, sans-serif"><i>os</i></font></code><code><font face="Calibri, sans-serif"><span lang="es-ES"><i>
			wildcard</i></span></font></code><code><font face="Calibri, sans-serif"><i>
			son por ejemplo:</i></font></code></p>
			<p align="left"><code><font face="Calibri, sans-serif"><i>S% =
			filtrar todo lo que tenga s</i></font></code></p>
		</td>
		<td width="135" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p align="left">
			<code><font face="Calibri, sans-serif"><span lang="en-US"><i>SELECT
			* FROM NomTabla WHERE NomColumna LIKE ‘wildcard”;</i></span></font></code></p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="57" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<code><font face="Calibri, sans-serif">ORDER BY</font></code></p>
		</td>
		<td width="64" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<code><font face="Calibri, sans-serif">Después del FROM</font></code></p>
		</td>
		<td width="117" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<code><font face="Calibri, sans-serif">Ordenar una selección</font></code></p>
		</td>
		<td width="135" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p align="left">
			<code><font face="Calibri, sans-serif"><span lang="en-US">SELECT *
			FROM NomTabla ORDER BY “NomColumna”</span></font></code></p>
		</td>
	</tr>
</table>
<h3 class="western" style="line-height: 100%; margin-top: 0cm; margin-bottom: 0.42cm">
</h3>
<h3 class="western" style="line-height: 100%; margin-top: 0cm; margin-bottom: 0.42cm">
<font face="Calibri, sans-serif">


</div>
<div class="col-md-4 mx-auto">
<a href="../mysql.php" class="btn btn-success" role="button" >Regresar a Menu Mysql</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>