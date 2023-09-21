<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Correr App React</h2>
<div class="container" style="width: 46rem;">


<p style="line-height: 100%">Para correr o probar una APP-React se
abre una consola ubicada en el esqueleto de la APP y se coloca el
comando:</p>
<p align="center" style="line-height: 100%"> <i><u>npm</u></i><span lang="es-ES"><i><u>
</u></i></span><span lang="es-ES"><i><u>run </u></i></span><span lang="es-ES"><i><u>start</u></i></span></p>
<p style="line-height: 100%; margin-bottom: 0cm"><b>OJO:</b> Cuando
no quiera correr y salga algún tipo de error como:</p>
<ul>
	<li><p style="line-height: 100%; margin-bottom: 0cm"><i>events.js:292</i><span lang="es-ES"><i>
	throw</i></span><i> er; //</i><span lang="es-ES"><i> Unhandled</i></span><i>
	'error'</i><span lang="es-ES"><i> event</i></span> Hay que instalar
	una versión anterior de react-scripts por que las nuevas
	actualizaciones están teniendo conflictos, para ello se da desde
	una consola ubicada en la misma carpeta del proyecto así:</p>
</ul>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><i>npm
install <a href="mailto:react-scripts@2.1.8" target="_top">react-scripts@2.1.8</a></i></p>
<ul>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><span lang="es-ES"><i>'React'
	must be in scope when using JSX </i></span>Hay que importar la
	librería de React para poder manejar componentes así: En el
	archivo App.js de la carpeta src agregar la siguiente línea de
	código;</p>
</ul>
<p lang="en-US" align="center" style="line-height: 100%; margin-bottom: 0.42cm">
<i><font color="#000000"><font face="Calibri, sans-serif"><span lang="en-US"><b>import
React, {Component} from 'react';</b></span></font></font></i></p>

</div>
<div class="col-md-4 mx-auto">
<a href="../react.php" class="btn btn-success" role="button" >Regresar a Menu React</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>