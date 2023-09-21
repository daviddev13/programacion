<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">App React+ Node-Express</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%">Para crear una APP Node-Express que
tenga React al mismo tiempo se debe:</p>
<ol>
	<li><p align="left" style="line-height: 100%">Se crea una
	APP-Node-Express con cualquier nombre por ejemplo Servidor:</p>
</ol>
<p align="center" style="line-height: 100%; margin-left: 0.64cm"><i><u>express
Servidor  --view=hb</u></i><i><u>s</u></i></p>
<ol start="2">
	<li><p align="left" style="line-height: 100%">Dentro de la carpeta
	<i><u>Prueba</u></i> se crea una APP-React para el frontend con otro
	nombre ejemplo <i><u>frontend</u></i> así:</p>
</ol>
<p align="center" style="margin-left: 0.64cm; margin-top: 0.4cm; margin-bottom: 0.4cm">
<i>npx create-react-app frontend</i></p>
<ol start="3">
	<li><p align="left" style="line-height: 100%">Desde una consola
	ubicada en la carpeta <i><u>Servidor</u></i> se instalan los módulos
	de Node con el comando:</p>
</ol>
<p align="center" style="line-height: 100%; margin-left: 0.64cm"><i>npm
install</i></p>
<ol start="4">
	<li><p align="left" style="line-height: 100%">Se cambia el puerto de
	la APP-Node-Express (Servidor) en el archivo WWW para que la
	APP-React (frontend) no empiece en el mismo puerto 3000 de la
	APP-Node-Express (servidor).</p>
	<li><p style="line-height: 100%">En la carpeta servidor se busca el
	archivo package.json y se configuran los scripts de inicio para que
	al correr la APP-Nodet-Express también corra la APP  React
	(frontend) así:</p>
</ol>
<ul>
	<ul>
		<li><p style="line-height: 100%">Se crean dos nuevos script de
		inicio para la APP-Node-Express, uno se dirige hacia el inicio
		clásico de una APP-Node-express (el archivo www de la carpeta bin)
		 y el otro se dirige a un nuevo archivo .js creado dentro de la
		APP-Node-express (start-client.js) así:</p>
	</ul>
</ul>
<p lang="en-US" align="center" style="line-height: 100%; margin-left: -0.64cm">
<i>&quot;backend&quot;: &quot;node ./bin/www&quot;,</i></p>
<p lang="en-US" align="center" style="line-height: 100%; margin-left: -0.64cm">
    <i>&quot;frontend&quot;: &quot;node start-client.js&quot;,</i></p>
<p lang="en-US" align="center" style="font-style: normal; line-height: 100%; margin-left: -0.64cm">
   Nota: El nuevo archivo start-client.js creado dentro de la carpeta
servidor o la APP Node-express debe contener el siguiente codigo el
cual hace posible la lectura de la carpeta frontend o la APP react:</p>
<p lang="en-US" align="center" style="line-height: 100%; margin-left: -0.64cm">
<i>const args = [ 'start' ];</i></p>
<p lang="en-US" align="center" style="line-height: 100%; margin-left: -0.64cm">
<i>const opts = { stdio: 'inherit', cwd: 'frontend', shell: true };</i></p>
<p lang="en-US" align="center" style="line-height: 100%; margin-left: -0.64cm">
<i>require('child_process').spawn('npm', args, opts);</i></p>
<ul>
	<ul>
		<li><p style="line-height: 100%">Se configura el script de inicio
		clasico<span lang="es-ES"> </span><span lang="es-ES">(</span><span lang="es-ES">start</span><span lang="es-ES">)</span>
		que viene por defecto adicionando los dos nuevos scripts creados en
		el punto anterior a traves del modulo de Node concurrently así:</p>
	</ul>
</ul>
<p align="center" style="line-height: 100%; margin-left: -0.64cm">
<span lang="en-US"><i>&quot;start&quot;: &quot;concurrently \&quot;npm
run frontend\&quot; \&quot;npm run backend\&quot;&quot;,</i></span></p>
<p align="center" style="line-height: 100%; margin-left: -0.64cm"><br/>
<br/>

</p>
<p align="center" style="line-height: 100%"><span lang="en-US"><i>Nota:
Para que funcione dicho script hay que instalar el modulo de Node
concurrently en la APP Node-express</i></span></p>
<ul>
	<ul>
		<li><p style="line-height: 100%">Por lo que se tendrían los
		siguientes scripts:</p>
	</ul>
</ul>
<p style="line-height: 100%; margin-left: 0.64cm"> &quot;scripts&quot;:
{</p>
<p style="line-height: 100%; margin-left: 0.64cm">    &quot;start&quot;:
&quot;concurrently \&quot;npm run frontend\&quot; \&quot;npm run
backend\&quot;&quot;,</p>
<p style="line-height: 100%; margin-left: 0.64cm">    &quot;backend&quot;:
&quot;node ./bin/www&quot;,</p>
<p style="line-height: 100%; margin-left: 0.64cm">    &quot;frontend&quot;:
&quot;node start-client.js&quot;,</p>
<p style="line-height: 100%; margin-left: 0.64cm">  },</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>


</div>
<div class="col-md-4 mx-auto">
<a href="../node.php" class="btn btn-success" role="button" >Regresar a Menu Node</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>