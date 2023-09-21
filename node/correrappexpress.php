<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Iniciar o correr App Node-Express</h2>
<div class="container" style="width: 46rem;">


<p style="line-height: 100%">Para arrancar una App Node-Express se
hace desde una consola ubicada en la carpeta del proyecto con el
comando:</p>
<p align="center" style="line-height: 100%"><i>npm run ScriptInicio</i></p>
<p align="left" style="line-height: 100%">Dónde:</p>
<ul>
	<li><p align="left" style="line-height: 100%">ScriptInicio = línea
	de código ubicada en el archivo package.json la cual dirige la APP
	al archivo WWW para arrancar, por defecto el <i>ScriptInicio</i><span lang="es-ES"><i>=start</i></span>
	por lo que sería así: <i>npm</i><span lang="es-ES"><i> start</i></span>
	pero se puede cambiar.</p>
</ul>
<p style="line-height: 100%; margin-bottom: 0cm"><b>OJO:</b> Si al
iniciar una APP Node-Express desde consola esta no arranca se debe:</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p style="line-height: 100%; margin-bottom: 0cm">- Revisar la APP
desde un navegador con el enlace del puerto (<a href="http://localhost:3000/">http://localhost:3000/</a>)</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p style="line-height: 100%; margin-bottom: 0cm">- Actualizar el
servidor (Ver actualizar servidor Node)</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p style="line-height: 100%; margin-bottom: 0cm">- Instalar los
módulos necesarios para que la APP funcione (ver instalación de
módulos en Node).</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p style="line-height: 100%; margin-bottom: 0.42cm"><font face="Calibri, sans-serif"><span style="font-weight: normal">-
</span></font><font face="Calibri, sans-serif"><span style="font-weight: normal">Si
la APP tiene alguna conexión a un gestor de base de datos revisar el
gestor de base de datos (Ver Mysql).</span></font></p>

</div>
<div class="col-md-4 mx-auto">
<a href="../node.php" class="btn btn-success" role="button" >Regresar a Menu Node</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>