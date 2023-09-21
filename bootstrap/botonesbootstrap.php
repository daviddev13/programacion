<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Botones en Bootstrap</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%">Para hacer un botón con Bootstrap solo
se adiciona el atributo clase (class)  de acuerdo al color o tipo de
botón que se quiere (ver clases de botones) de alguna de estas tres
formas:</p>
<ol>
	<li><p style="line-height: 100%">Con el elemento  &lt;a&gt;
	(enlaces) permite hacer botones con el atributo href y se pueden
	colocar enlaces</p>
	<li><p style="line-height: 100%">Con el elemento &lt;button&gt;
	(botones) permite hacer botones que contienen otros elementos no
	interactivos como &lt;b&gt; &lt;br&gt;</p>
	<li><p style="line-height: 100%">Con el elemento &lt;input&gt;
	(entradas) permite hacer botones para subir cosas con el atributo
	type=input.</p>
</ol>
<p style="line-height: 100%"> Por ejemplo:</p>
<p style="line-height: 100%">Botón con un enlace:</p>
<p lang="en-US" align="center" style="line-height: 100%; margin-bottom: 0cm">
<font color="#000000"><i>&lt;a class=&quot;btn btn-info&quot;
href=&quot;./enlace/&quot; role=&quot;button&quot;&gt;TextodelBoton&lt;/a&gt;</i></font></p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Botón
 para subir un formulario dentro de un form:</font></p>
<p align="center" style="line-height: 100%; margin-bottom: 0.35cm"><font color="#000000">
</font><font color="#000000"><span lang="en-US"><i>&lt;button
type=&quot;submit&quot; class=&quot;btn
btn-success&quot;&gt;Subir&lt;br&gt;Formulario&lt;/button&gt;</i></span></font></p>
<p align="left" style="line-height: 100%; margin-bottom: 0.35cm"><font color="#000000">Botón
sencillo para subir un formulario:</font></p>
<p align="center" style="line-height: 100%; margin-bottom: 0.35cm"><font color="#000000"><span lang="en-US"><i>&lt;input
type=&quot;submit&quot; class=&quot;btn btn-success&quot;
value=&quot;Subir formulario&quot;/&gt;</i></span></font></p>
<p align="center" style="line-height: 100%; margin-bottom: 0.35cm"><br/>
<br/>

</p>
<p align="center" style="line-height: 100%; margin-bottom: 0.35cm"><font color="#000000"><span lang="en-US"><i>Nota:</i></span></font></p>
<p align="center" style="line-height: 100%; margin-bottom: 0.35cm"><font color="#000000"><span lang="en-US"><i>Bootstrap
cuenta con diferentes clases de botones ya establecidos en sus
librerías estas clases lo que hacen es que varían su </i></span></font><font color="#000000"><span lang="en-US"><i><u>color
</u></i></span></font><font color="#000000"><span lang="en-US"><i><u>entre</u></i></span></font><font color="#000000"><span lang="en-US"><i>
ellas están class=&quot;btn btn-success&quot; </i></span></font><font color="#000000"><span lang="en-US"><i>y
otras ver documentacion</i></span></font><font color="#000000"><span lang="en-US"><i>
</i></span></font>
</p>

</div>
<div class="col-md-4 mx-auto">
<a href="../bootstrap.php" class="btn btn-success" role="button" >Regresar al Menu</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>