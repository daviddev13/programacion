<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Funciones tipo React</h2>
<div class="container" style="width: 46rem;">

<p> Funciones utiles para que los elementos HTML de un código se puedan volver componentes
	React y así obtener partes del código como atributos.</p>

<p style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Para
definir funciones en React se procede así:</font></p>
<ol>
	<li><p style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Se
	asigna un nombre a una función:</font></p>
</ol>
<p align="center" style="line-height: 100%; margin-top: 0.42cm; margin-bottom: 0cm">
<font color="#000000"><i>function Nombre (props) {}</i></font></p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Dónde:</font></p>
<ul>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Nombre=Identificación
	que se quiera dar.</font></p>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">props=variable
	de la función que en React son las propiedades (props)</font></p>
</ul>
<p style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><b>OJO:</b></font><font color="#000000">
si </font><font color="#000000"><u><b>No</b></u></font><font color="#000000">
se necesita compartir propiedades entre varios códigos o diferentes
archivos React se omite el  props.</font></p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<ol start="2">
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Se
	asigna un return al inicio que contendrá todo lo que debe retornar
	la función al ser llamada:</font></p>
</ol>
<p align="center" style="line-height: 100%; margin-top: 0.42cm; margin-bottom: 0cm">
<font color="#000000"><i>function Nombre (props) {return () ;}</i></font></p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<ol start="3">
	<li><p style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Para
	que React reconozca  el código como componente React la función
	debe tener  algún contenedor (por ejemplo un &lt;div&gt;):</font></p>
</ol>
<p align="left" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<font color="#000000"><span lang="en-US"><i>function Nombre (props) {</i></span></font></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<font color="#000000">  <i>return (</i></font></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<font color="#000000">     <i>&lt;div className=&quot;NombreClase&quot;&gt;&lt;/div&gt;</i></font></p>
<p align="left" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<font color="#000000">  </font><font color="#000000"><i>);}</i></font></p>
<p style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><b>OJO:</b></font><font color="#000000">
En HTML para definir la clase del contenedor &lt;div&gt; se utiliza
class, en React se utiliza className.</font></p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<ol start="4">
	<li><p style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><font face="Calibri, sans-serif"><span lang="en-US"><i><span style="font-weight: normal">Dentro
	del contenedor ya se desarrolla el código que se quiere.</span></i></span></font></font></p>
</ol>

</div>
<div class="col-md-4 mx-auto">
<a href="../react.php" class="btn btn-success" role="button" >Regresar a Menu React</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>