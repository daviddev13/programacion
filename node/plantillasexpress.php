<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Plantillas en APP-Node-Express</h2>
<div class="container" style="width: 46rem;">


<p style="line-height: 100%; margin-top: 0.4cm; margin-bottom: 0.4cm">
Las APP tipo Express en Node permite seleccionar unos tipos de
plantillas, dichas plantillas son dinámicas por lo cual permiten
incrustar propiedades a los objetos que se quieren mostrar en el
navegador, a continuación se pueden ver unos ejemplos de las
plantillas Handlebars (HBS) sin embargo hay otras plantillas que se
pueden seleccionar como las plantillas PUG, etc.</p>
<p style="line-height: 100%; margin-top: 0.4cm; margin-bottom: 0cm">Handlebars
(HBS)</p>
<table width="368" cellpadding="4" cellspacing="0">
	<col width="175"/>

	<col width="175"/>

	<tr valign="top">
		<td width="175" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			Ejemplo</p>
		</td>
		<td width="175" style="border: 1px solid #000000; padding: 0.1cm"><p>
			Código</p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="175" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			Pasar una variable desde una ruta en la APP-Node-Express a una
			plantilla hbs</p>
		</td>
		<td width="175" style="border: 1px solid #000000; padding: 0.1cm"><p>
			res.render('NomPlantilla',{variable})</p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="175" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			Pasar varias variables desde una ruta en la APP-Node-Express a una
			plantilla hbs</p>
		</td>
		<td width="175" style="border: 1px solid #000000; padding: 0.1cm"><p>
			res.render('NomPlantilla',{variable1,variable2})</p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="175" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p style="margin-bottom: 0cm">
			Condicionar una vista en el navegador a través de una plantilla
			HBS</p>
			<p align="left">si se pasa una variable desde una ruta en
			APP-Express</p>
		</td>
		<td width="175" style="border: 1px solid #000000; padding: 0.1cm"><p style="margin-bottom: 0cm">
			<br/>

			</p>
			<p style="margin-bottom: 0cm">{{#<span lang="en-GB">if</span>
			variable}}</p>
			<p style="margin-bottom: 0cm">{{<span lang="en-GB">else</span>}}</p>
			<p>{{/<span lang="en-GB">if</span>}}</p>
		</td>
	</tr>
</table>
<h3 class="western" style="line-height: 100%; margin-top: 0cm; margin-bottom: 0.42cm">
</h3>

</div>
<div class="col-md-4 mx-auto">
<a href="../node.php" class="btn btn-success" role="button" >Regresar a Menu Node</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>