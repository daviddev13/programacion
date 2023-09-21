<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Clases tipo React</h2>
<div class="container" style="width: 46rem;">

<p> Funciones utiles para que los elementos HTML de un código se puedan volver componentes
	React y así obtener partes del código como atributos.</p>

<p style="line-height: 100%; margin-top: 0.39cm; margin-bottom: 0cm"><font color="#000000">Para
definir una clase en React se procede así:</font></p>
<ol>
	<li><p style="line-height: 100%; margin-top: 0.09cm; margin-bottom: 0cm">
	<font color="#000000">Se asigna un nombre a la clase utilizando
	</font><font color="#000000"><i>Component</i></font><font color="#000000">
	de la librería React así:</font></p>
</ol>
<p style="line-height: 100%; margin-top: 0.19cm; margin-bottom: 0.05cm">
<font color="#000000"> </font><font color="#000000"><i>class Nombre
extends Component {}</i></font></p>
<ol start="2">
	<li><p style="line-height: 100%; margin-top: 0.39cm; margin-bottom: 0cm">
	<font color="#000000">Se coloca un constructor para manejar las
	propiedades (props) de la clase creada así:</font></p>
</ol>
<p align="left" style="line-height: 100%; margin-top: 0.39cm; margin-bottom: 0cm">
<font color="#000000"><i>class Nombre extends Component {constructor
(props) {} ;}</i></font></p>
<p align="left" style="line-height: 100%; margin-top: 0.39cm; margin-bottom: 0cm">
<font color="#000000"><b>Nota:</b></font></p>
<ul>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Los
	props son importantes para compartir propiedades entre archivos de
	React.</font></p>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Para
	ver más de props ver el constructor en React</font></p>
</ul>
<ol start="3">
	<li><p style="line-height: 100%; margin-top: 0.39cm; margin-bottom: 0cm">
	<font color="#000000">Se coloca un </font><font color="#000000"><i>render</i></font><font color="#000000">
	para saber lo que debe mostrar la clase al ser llamada a su vez con
	un return para saber que debe retornar la clase así:</font></p>
</ol>
<p align="left" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<font color="#000000"> <i>class Nombre extends Component</i></font></p>
<p align="left" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<font color="#000000">  <i>{constructor (props) {};</i></font></p>
<p align="left" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<font color="#000000">    <i>render () {return () }</i></font></p>
<p align="left" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<font color="#000000"><i>}</i></font></p>
<p style="line-height: 100%; margin-top: 0.09cm; margin-bottom: 0cm"><font color="#000000"><b>OJO</b></font><font color="#000000">:</font></p>
<ul>
	<li><p style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Al
	igual que la definición de función en React, las clases debe tener
	un contenedor (&lt;div&gt;) para que se reconozca como elemento en
	otros archivos de React.</font></p>
	<li><p style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><font face="Calibri, sans-serif"><span lang="en-US"><i><span style="font-weight: normal">AL
	igual que la definición de función en React dentro del contenedor
	se desarrolla en código que se quiere.</span></i></span></font></font></p>
</ul>

</div>
<div class="col-md-4 mx-auto">
<a href="../react.php" class="btn btn-success" role="button" >Regresar a Menu React</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>