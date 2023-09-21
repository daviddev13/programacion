<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Construir
propiedades en React (Constructor)</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%; margin-top: 0.39cm; margin-bottom: 0cm"><font color="#000000">El
constructor en React es el lugar para definir el estado inicial de
una clase así:</font></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<font color="#000000"><i>constructor (props) {</i></font></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<font color="#000000">                                  <i>super
(props);</i></font></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<font color="#000000">                                  <i>this.state=
{}; };</i></font></p>
<p style="line-height: 100%; margin-bottom: 0cm"><a name="__RefHeading___Toc11807_3200579522"></a>
Dónde:</p>
<ul>
	<li><p style="line-height: 100%"><b>This.state:</b> Lugar Dónde se
	define el estado inicial de atributos/variables para guardar
	datos/propiedades de la clase.</p>
</ul>
<p style="line-height: 100%">Ejemplo para crear una variable llamada
datos que su estado inicial sea vacío seria;  
</p>
<p align="center" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<font color="#000000"> <i>this.state= {datos:[]};</i></font></p>
<p align="center" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<br/>

</p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><b>OJO:</b></font></p>
<ul>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">El
	constructor solo se usa en clases no con funciones</font></p>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><font color="#000000"><font face="Calibri, sans-serif"><span lang="en-US"><i><span style="font-weight: normal">En
	una función se pueden llamar props de otro archivo pero no se
	pueden construir props.</span></i></span></font></font></font></p>
</ul>

</div>
<div class="col-md-4 mx-auto">
<a href="../react.php" class="btn btn-success" role="button" >Regresar a Menu React</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>