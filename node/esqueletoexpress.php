<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Plantillas en APP-Node-Express</h2>
<div class="container" style="width: 46rem;">


<h3 class="western" style="line-height: 100%">
<font face="Calibri, sans-serif"><b>Esqueleto de APP Node - Express</b></font></h3>
<p style="line-height: 100%; margin-top: 0.4cm; margin-bottom: 0.4cm">
Las carpetas, subcarpetas y archivos que salen al crear una APP con
Express componen el esqueleto de la APP y son:</p>
<table width="368" cellpadding="4" cellspacing="0">
	<col width="57"/>

	<col width="292"/>

	<tr valign="top">
		<td width="57" height="24" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			Carpeta/Archivo</p>
		</td>
		<td width="292" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm"><p>
			Aquí</p>
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
		<td width="57" height="113" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			Routes</p>
		</td>
		<td width="292" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p style="margin-bottom: 0cm">
			Están las rutas definidas o enlaces de las paginas, estas se
			definen en archivos de extensión .js por defecto viene con dos
			rutas definidas como son:</p>
			<ul>
				<li><p style="margin-bottom: 0cm">Index.js ruta definida para
				mostrar las respuestas al usuario.</p>
				<li><p>users.js  ruta definida para  recibir los requerimientos
				de los usuarios.</p>
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
		<td width="57" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			Bin</p>
		</td>
		<td width="292" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.1cm"><p>
			Se encuentra el archivo de carga (www), en Dónde se define el
			puerto Dónde se conecta la APP con el servidor y se reportan los
			errores de conexión o los manejadores de errores.</p>
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
		<td width="57" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			Public</p>
		</td>
		<td width="292" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm"><p style="margin-bottom: 0cm">
			Están todos los archivos del Front-end como son imágenes, .js,
			.css, etc. Por defecto vienen organizados en 3 subcarpetas:</p>
			<p style="margin-bottom: 0cm">JavaScript</p>
			<p style="margin-bottom: 0cm">images</p>
			<p style="margin-bottom: 0cm">stylesheets</p>
			<p>JavaScript 
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
		<td width="57" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			Views</p>
		</td>
		<td width="292" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm"><p style="margin-bottom: 0cm">
			Están las plantillas escogidas para mostrar las cosas en el
			navegador por defecto tiene los siguientes archivos:</p>
			<ul>
				<li><p style="margin-bottom: 0cm">index.hbs archivo donde se
				crean las vistas html para el usuario.</p>
				<li><p style="margin-bottom: 0cm">layouts.hbs archivo donde se
				definen los cabeceros que tendrán las paginas, por ejemplo una
				relación con una hoja de estilo .css, etc. (ver relaciones de
				HTML con archivos externos)</p>
				<li><p style="margin-bottom: 0cm">errors.hbs archivo donde se
				definen los mensajes de error o el manejo de errores de la
				aplicación.</p>
			</ul>
			<p><b>OJO: </b>Escogida la plantilla no hay que volver a colocar
			la extensión del archivo por ejemplo index.pug o index.hbs no es
			necesario solo<span lang="es-ES"> index</span>.</p>
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
		<td width="57" style="border-top: 1px solid #000000; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			package.json</p>
		</td>
		<td width="292" style="border-top: 1px solid #000000; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0cm; padding-left: 0.1cm; padding-right: 0.1cm"><p style="margin-bottom: 0cm">
			Se define información de la APP como la  versión, los módulos
			de que depende la APP para  funcionar y los scripts que son líneas
			de código para establecer cosas como:</p>
			<p style="margin-bottom: 0cm"><br/>

			</p>
			<p style="margin-bottom: 0cm">- Script de inicio/starscript =
			forma de entrada a la aplicación, este inicia el servidor
			definiéndole la ubicación del archivo de carga de la APP
			(generalmente se llama www).</p>
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
		<td width="57" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			App.js:</p>
		</td>
		<td width="292" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm"><p style="margin-bottom: 0cm">
			Se establece la configuración de la  APP definiendo como se
			conectan los archivos, las carpetas, los códigos, etc. con los
			módulos de Node. Este archivo tiene dos métodos de express o<span lang="es-ES">
			middleware</span> importantes como son:</p>
			<ul>
				<li><p style="margin-bottom: 0cm">.use() = para servir (conectar
				o retornar) archivos estáticos, le dice a la APP que archivos
				puede usar  ejemplo:</p>
			</ul>
			<p style="margin-bottom: 0cm"><i>app.use(express.json)</i> APP
			envié y reciba archivos .json que son los archivos de la
			información de la APP</p>
			<ul>
				<li><p style="margin-bottom: 0cm">.set() = para fijar cosas
				estáticas en la APP Express por ejemplo:</p>
			</ul>
			<p style="margin-bottom: 0cm"><br/>

			</p>
			<p style="margin-bottom: 0cm"><i>app.set ('view</i><span lang="es-ES"><i>
			engine</i></span><i>', 'hbs')</i> APP fije como motor de vistas
			las plantillas hbs.</p>
			<p style="margin-bottom: 0cm"><br/>

			</p>
			<p style="margin-bottom: 0cm">app.set ('trust proxy', true); App
			fije el proxy como verdadero (permita la comunicación entre el
			navegador y servidor).</p>
			<p style="margin-bottom: 0cm"><br/>

			</p>
			<p style="margin-left: 1.27cm; margin-bottom: 0cm">Set también
			especificar la ubicación de las paginas estáticas de la APP o
			fija nuevas carpetas a la APP indicando el tipo de cosas
			almacenadas y la carpeta así:</p>
			<p style="margin-bottom: 0cm"><i>static(string+ ’carpeta’):</i></p>
			<p style="margin-left: 1.27cm; margin-bottom: 0cm"> Dónde:</p>
			<ul>
				<ul>
					<li><p style="margin-bottom: 0cm">string=cadena de texto que
					almacena la ubicación de los archivos estáticos</p>
					<li><p>carpeta= nombre de carpeta donde se ubican los archivos  
					</p>
				</ul>
			</ul>
		</td>
	</tr>
</table>
<p style="line-height: 100%; margin-bottom: 0.42cm"><font face="Calibri, sans-serif"><b>OJO:
Otros archivos/carpetas importantes en el esqueleto de la APP Node
son la carpeta </b></font><font face="Calibri, sans-serif"><b>node_modules
que se explica en la instalación de módulos en Node y el archivo
Package-lock.json.</b></font></p>

</div>
<div class="col-md-4 mx-auto">
<a href="../node.php" class="btn btn-success" role="button" >Regresar a Menu Node</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>