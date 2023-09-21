<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Automatizar Servidor Node</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%; margin-bottom: 0cm">Para automatizar el
código del servidor y que cada vez que se realice un cambio sea
visible en él, se usa el módulo Nodemon (Modulo útil cuando se
está desarrollando), este se instala editando el archivo
package.json debajo de las dependencias con la línea:</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><i>&quot;devDependencies&quot;:
{&quot;nodemon&quot;: &quot;^2.0.4&quot;}</i></p>
<p style="line-height: 100%; margin-bottom: 0cm"><b>OJO</b>:
Asegurase de colocar coma para agregar la nueva dependencia.</p>
<p style="line-height: 100%; margin-bottom: 0cm">Una vez editado el
package.json desde una consola ubicada dentro de la carpeta del
proyecto se instala la nueva dependencia (Nodemon) con el comando:</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"> <i>npm
install</i></p>
<p style="line-height: 100%; margin-bottom: 0cm">Ahora para iniciar
la APP desde nodemon hay que crear un nuevo script de inicio dentro
del package.json así:</p>
<p lang="en-US" align="left" style="line-height: 100%; margin-bottom: 0cm">
“<i>scripts” :{</i></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-bottom: 0cm">
“<i>start”: “node . /bin/www”,</i></p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm">“<i>devstart”;
“nodemon ./bin/www”},</i></p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p style="line-height: 100%; margin-bottom: 0cm">Probando la APP
desde una consola ubicada en la carpeta del proyecto con el comando:</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><i>npm
run devstart</i></p>
<p style="line-height: 100%; margin-bottom: 0cm"><b>OJO:</b></p>
<ul>
	<li><p style="line-height: 100%; margin-bottom: 0cm">Por consola
	aparece siempre como se inicia la APP [nodemon]<span lang="es-ES">
	starting</span></p>
	<li><p style="line-height: 100%; margin-bottom: 0.42cm"><font face="Calibri, sans-serif"><span style="font-weight: normal">Puede
	cambiar el nombre del script pero si  lo cambia debe iniciar con:
	</span></font><font face="Calibri, sans-serif"><i><span style="font-weight: normal">npm
	run NomScript</span></i></font></p>
</ul>

</div>
<div class="col-md-4 mx-auto">
<a href="../node.php" class="btn btn-success" role="button" >Regresar a Menu Node</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>