<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Esqueleto de un Código tipo
React</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%; margin-top: 0.39cm; margin-bottom: 0cm"><font color="#000000">Conociendo
la definición de funciones y clases en React se puede ver el orden o
esqueleto de un archivo .js en una APP React que sería así:</font></p>
<ol>
	<li><p style="line-height: 100%; margin-top: 0.39cm; margin-bottom: 0cm">
	<font color="#000000">Importación de módulos de React</font></p>
</ol>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><i>import
React from 'react';</i></font></p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><i>import….
from '…..';</i></font></p>
<ol start="2">
	<li><p style="line-height: 100%; margin-top: 0.39cm; margin-bottom: 0cm">
	<font color="#000000">Importación de librerías creadas en la APP</font></p>
</ol>
<p lang="en-US" align="left" style="line-height: 100%; margin-bottom: 0cm">
<font color="#000000"><i>import NomArchivo from './NombreArchivo.js';</i></font></p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><i>import….
from '…..';</i></font></p>
<ol start="3">
	<li><p style="line-height: 100%; margin-top: 0.39cm; margin-bottom: 0cm">
	<font color="#000000">Definición de funciones o clases del código:</font></p>
</ol>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><i>class
Nombre extends Component {</i></font></p>
<p align="left" style="line-height: 100%; margin-left: 1.27cm; margin-bottom: 0cm">
<font color="#000000"><i>constructor (props) {};</i></font></p>
<p align="left" style="line-height: 100%; margin-left: 1.27cm; margin-bottom: 0cm">
<font color="#000000"><i>funcionflecha = (e) =&gt; {}</i></font></p>
<p align="left" style="line-height: 100%; margin-left: 1.27cm; margin-bottom: 0cm">
<font color="#000000"><span lang="en-US"><i>render (</i></span></font></p>
<p align="left" style="line-height: 100%; margin-left: 1.27cm; margin-bottom: 0cm">
<font color="#000000"><span lang="en-US"><i>return (    </i></span></font><span lang="en-US">&lt;div
className=&quot;App&quot;&gt;</span></p>
<p style="line-height: 100%; margin-left: 3.81cm; margin-bottom: 0cm">
&lt;div&gt;&lt;/div&gt;</p>
<p align="left" style="line-height: 100%; margin-left: 2.86cm; margin-bottom: 0cm">
<font color="#000000"><i>&lt;/div&gt;</i></font></p>
<p align="left" style="line-height: 100%; margin-left: 2.86cm; margin-bottom: 0cm">
<font color="#000000"><i>))}</i></font></p>
<ol start="4">
	<li><p style="line-height: 100%; margin-top: 0.19cm; margin-bottom: 0.05cm">
	<font color="#000000">Exportación para que se reconozcan las
	funciones del archivo.</font></p>
</ol>
<p style="line-height: 100%; margin-top: 0.09cm; margin-bottom: 0cm"><font color="#000000"><i>export
default FuncionExportada;</i></font></p>
<p align="left" style="line-height: 100%"><br/>
<br/>

</p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><b>OJO:</b></font></p>
<ul>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Las
	funciones que se realizan en cada clase por lo general no son
	normales hoy en día ya se hacen es con funciones flecha para que el
	código siga corriendo a pesar de entrar en una función es decir
	trabaje asincrónicamente.</font></p>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Un
	archivo puede tener varias clases o funciones tipo React definidas
	no solo una.</font></p>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><font face="Calibri, sans-serif"><span lang="en-US"><i><span style="font-weight: normal">Como
	se ve dentro del contenedor &lt;div&gt; se pueden hacer varias capas
	siempre y cuando no estén al mismo nivel de la primera capa, si no
	que estén contenidas en ella.</span></i></span></font></font></p>
</ul>

</div>
<div class="col-md-4 mx-auto">
<a href="../react.php" class="btn btn-success" role="button" >Regresar a Menu React</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>