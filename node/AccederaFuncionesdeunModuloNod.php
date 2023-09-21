<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Acceder a funciones de un Modulo</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%; margin-bottom: 0cm">Cuando se instala un
módulo es porque se quiere utilizar alguna herramienta o función de
este y para poder utilizarlas primero se requiere el modulo en el
código que se desea usar la función así:</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"> <i>var
NomVariable=</i><i>require (</i><i>'NomM</i><i>odulo</i><i>'</i><i>);</i></p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p style="line-height: 100%; margin-bottom: 0cm">Dónde<b>:</b></p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<ul>
	<li><p style="line-height: 100%; margin-bottom: 0cm">NomVariable=
	Nombre para identificar el modulo dentro del código que lo
	necesita.</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">NomModulo=
	Ubicación/URL del módulo sin extensión. Los módulos propios de
	desarrolladores de Node basta con el nombre para la URL.</p>
	<p style="line-height: 100%; margin-bottom: 0cm"></p>
</ul>
<p style="line-height: 100%; margin-bottom: 0cm"><b>OJO:</b> Si
necesita pocas funciones de un módulo puede requerir solo lo que
necesita con llaves pero debe conocer el nombre así:</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><i>var
NomVariable=</i><i>require {</i><i>'NomFuncion}</i><i>;</i></p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p style="line-height: 100%; margin-bottom: 0cm">Asignada una
variable para acceder al módulo o sus funciones, se puede citar
alguna función dentro de un código así:</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><i>NomVariable.NomFuncion
()</i></p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p style="line-height: 100%; margin-bottom: 0cm">Dónde:</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<ul>
	<li><p style="line-height: 100%; margin-bottom: 0cm">NomVariable=
	Nombre de la variable definida en el requerimiento del módulo.</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">NomFuncion=
	Función que se necesita del módulo requerido.</p>
	<p style="line-height: 100%; margin-bottom: 0cm"></p>
</ul>
<p style="line-height: 100%; margin-bottom: 0cm"><b>OJO</b>: Al
realizar un nuevo código en la APP generalmente se hacen un nuevo
archivo .js por organización pero para correr o probar nuevos
archivos en la APP Node-Express se necesita editar el archivo
index.js para establecer nuevas rutas ya que este solo tiene la ruta
por defecto que muestra la página inicial o<span lang="es-ES"> index</span>
(ver Rutas APP-Node-Express y Habilitar Rutas APP-Node-Express)</p>

</div>
<div class="col-md-4 mx-auto">
<a href="../node.php" class="btn btn-success" role="button" >Regresar a Menu Node</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>