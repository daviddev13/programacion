<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Esqueleto
de una APP React</h2>
<div class="container" style="width: 46rem;">


<p style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Al
crear una APP-React se generan varias carpetas con archivos que
componen el esqueleto de la APP, sin embargo hay archivos como los
nombrados a continuación que son para pruebas y se pueden eliminar:</font></p>
<ul>
	<li><p style="line-height: 100%; margin-bottom: 0cm">setuptests.js</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">serviceworker</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">app.test</p>
</ul>
<p style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Por
otro lado los a</font>rchivos principales que componen el  esqueleto
de una App-React son:</p>
<table width="368" cellpadding="4" cellspacing="0">
	<col width="99"/>

	<col width="251"/>

	<tr valign="top">
		<td width="99" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			Carpeta/Archivo</p>
		</td>
		<td width="251" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm"><p>
			<br/>

			</p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="99" height="46" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			README.md</p>
		</td>
		<td width="251" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm"><p>
			Archivo de documentación, instrucciones  y comandos que se pueden
			ejecutar en este tipo de APP.</p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="99" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			Src</p>
		</td>
		<td width="251" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.1cm"><p style="margin-bottom: 0cm">
			<font color="#000000"><i>Carpeta que cuenta con varios archivos
			.js y .css en Dónde los   principales son:</i></font></p>
			<ul>
				<li><p align="left" style="margin-bottom: 0cm">App.js:
				Instrucciones de lo que debe hacer la APP.</p>
				<li><p align="left" style="margin-bottom: 0cm">App.css:
				Apariencia para las instrucciones de App.js.</p>
				<li><p align="left" style="margin-bottom: 0cm">index.js:
				Renderiza la página inicial, por defecto es el código de App.js</p>
				<li><p align="left" style="margin-bottom: 0cm">index.css:
				apariencia para el cuerpo de la APP.</p>
				<li><p style="margin-bottom: 0cm">reportWebVitals.js: código que
				utiliza code que es la forma de mostrar los errores en React.</p>
			</ul>
			<p>  <b>OJO: </b>Ver el esqueleto de un archivo .js en Esqueleto
			de un Código tipo React</p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="99" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			<span lang="en-GB">Public</span></p>
		</td>
		<td width="251" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm"><p style="margin-bottom: 0cm">
			Carpeta que contiene los archivos del <i>front-end</i>, necesita
			como mínimo el archivo principal:</p>
			<ul>
				<li><p>index.html = Archivo con el código de la página inicial
				de la APP en el <i>body</i> direcciona la APP a los códigos de
				la carpeta <i>src</i>.</p>
			</ul>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="99" height="137" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			package.json</p>
		</td>
		<td width="251" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm"><p style="margin-bottom: 0cm">
			Archivo que tiene la información de la APP como: la  versión,
			los módulos de que depende para  funcionar y los scripts que son
			líneas de código para establecer cosas como:</p>
			<p style="margin-bottom: 0cm">- Script de inicio/starscript =
			forma de entrada a la aplicación.</p>
			<p>- Scripts de conexión con otros archivos.</p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="99" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			Package-lock.json</p>
		</td>
		<td width="251" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p>
			Archivo que establece la configuración de la  APP definiendo como
			se conectan los archivos, las carpetas, los códigos, etc. con los
			módulos de Node.</p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
			node_modules</p>
		</td>
		<td width="251" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p>
			Carpeta que contiene todo el contenido de los módulos de Node.</p>
		</td>
	</tr>
</table>
<h3 class="western" style="line-height: 100%; margin-top: 0cm; margin-bottom: 0.42cm"><a name="__RefHeading___Toc11791_3200579522"></a><a name="_Toc77961513"></a><a name="_Toc77645246"></a><a name="_Toc77598919"></a>
</h3>

</div>
<div class="col-md-4 mx-auto">
<a href="../react.php" class="btn btn-success" role="button" >Regresar a Menu React</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>