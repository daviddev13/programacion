<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Conexión al servidor desde React
(Axios)</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%">Para enviar datos desde el navegador y
enviarlos hasta el servidor React cuenta con el módulo Axios el cual
se usa así:</p>
<ol>
	<li><p style="line-height: 100%">Se instala el modulo:</p>
</ol>
<p align="center" style="line-height: 100%; margin-left: 0.64cm"><i>npm
install axios</i></p>
<ol start="2">
	<li><p style="line-height: 100%">Se importa el modulo en el archivo
	.js que se desea usar:</p>
</ol>
<p align="center" style="line-height: 100%; margin-left: 0.64cm"><i>import
axios from 'axios';</i></p>
<ol start="3">
	<li><p style="line-height: 100%">Dentro de una clase tipo React se
	usa en alguna función que se necesite enviar datos al servidor y
	recibir una respuesta así:</p>
</ol>
<p style="line-height: 100%; margin-bottom: 0cm">  <span lang="en-US"><i>axios.post
('EnlaceServidor', {NomVariable})</i></span></p>
<p lang="en-US" style="line-height: 100%; margin-bottom: 0cm">   
<i>.then (res =&gt; {})</i></p>
<p style="line-height: 100%">    <i>.catch (err =&gt; {console.error
(err) ;});</i></p>
<p style="line-height: 100%; margin-bottom: 0cm">Dónde: 
</p>
<ul>
	<li><p style="line-height: 100%; margin-bottom: 0cm">post=Se usa
	dicho método de envió de datos para que los datos viajen ocultos;</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">EnlaceServidor=
	Url o enlace de la ruta del servidor o APP-Node-Express a la cual
	queremos enviarle los datos.</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">NomVariable=
	Datos que se quieren enviar desde React  metidos en una variable.</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm"><span lang="es-ES">then</span>=
	controlador de flujo que contiene una función flecha (función
	asíncrona para procesos que se demoran) con la variable res
	(respuesta). Por lo general va acompañado de catch que se encarda
	de validar cuando no se recibe una respuesta en el<span lang="es-ES">
	then</span>.</p>
</ul>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p style="line-height: 100%; margin-bottom: 0cm">En resume: Si se
pudo conectar al servidor envíeme la respuesta por el<span lang="es-ES">
then</span> mas si no se pudo envié cual fue el error (err) por
consola. 
</p>

</div>
<div class="col-md-4 mx-auto">
<a href="../react.php" class="btn btn-success" role="button" >Regresar a Menu React</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>