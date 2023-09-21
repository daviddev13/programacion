<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Servidor en Node</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%; margin-bottom: 0.05cm">Se puede crear un
código servidor en Node (código encargado de cargar el Back-end)
sin tener una APP-Express así:</p>
<ol>
	<li><p style="line-height: 100%; margin-bottom: 0cm">Crear una
	carpeta Dónde estará ubicado el proyecto.</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">Abrir consola
	de comandos ubicada en el proyecto.</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">Crear archivo
	gestor de paquetes, este es un archivo de extensión .json que se
	crea con el comando:</p>
</ol>
<p align="center" style="line-height: 100%; margin-left: 1.27cm; margin-bottom: 0cm">
 <i>npm init</i></p>
<p style="line-height: 100%; margin-bottom: 0cm"><b>Ojo:</b> La
consola pedirá características del archivo, se pueden omitir (tecla<span lang="es-ES">
enter</span>) para configurarlas más fácil en un editor de texto.</p>
<ol start="4">
	<li><p style="line-height: 100%; margin-bottom: 0cm">Editar el
	código servidor con ayuda del módulo HTTP de Node y guardarlo
	extensión .js en la carpeta del proyecto.</p>
	<p style="line-height: 100%; margin-bottom: 0cm"></p>
</ol>
<p style="line-height: 100%; margin-bottom: 0cm">Sin embargo al crear
una APP-Node-Express esta ya tiene el código servidor (Ver Esqueleto
de APP-Node-Express) en la  carpeta Bin, la cual tiene el archivo WWW
que al ver su código en la línea 15 tiene la declaración del
número de puerto así:</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p lang="en-US" align="center" style="line-height: 100%; margin-bottom: 0cm">
<i>var port = normalizePort (process.env.PORT || '3000');</i></p>
<p lang="en-US" align="center" style="line-height: 100%; margin-bottom: 0cm">
<br/>

</p>
<p style="line-height: 100%; margin-bottom: 0cm">Que quiere decir
APP-Node-Express inicie en el navegador en el puerto 3000, el cual se
puede cambiar pero  recordarlo para conectarse al servidor, ya que
hay que utilizar en el navegador el número de puerto así:</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><i><a href="http://localhost:3000/">http://localhost:3000/</a></i></p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p style="line-height: 100%; margin-bottom: 0cm"><font face="Calibri, sans-serif"><b>Ojo:
Al copiar el enlace con el número de puerto del servidor en el
navegador y la APP-Node-Express no inicia, arrancar el servidor para
que se conecte con el navegador (Ver iniciar servidor Node-Express). 
</b></font>
</p>

</div>
<div class="col-md-4 mx-auto">
<a href="../node.php" class="btn btn-success" role="button" >Regresar a Menu Node</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>