<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Evitar conflictos en variables</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%">Al react permitir trabajar con
propiedades de diferentes archivos se producen conflictos cuando se
llama una variable y ya hay varias con el mismo nombre, hay una
variable indefinida o se le ha cambiado el valor a una variable
constantemente por eso se utiliza .bind para unir las cosas con la
respectiva variable y evitar errores. Por ejemplo:</p>
<ul>
	<li><p style="line-height: 100%; margin-bottom: 0cm">Se tiene un
	vector con un string y una función así:</p>
</ul>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><i>const
vector= {dato1: 'Hola',</i></p>
<p align="left" style="line-height: 100%; margin-left: 1.25cm">      
     <i>dato2: function () {console.log (this.dato1) ;}};</i></p>
<ul>
	<li><p style="line-height: 100%">Se crea una variable fuera del
	bloque anterior del mismo nombre que confunda</p>
</ul>
<p align="left" style="line-height: 100%; margin-top: 0.42cm; margin-bottom: 0cm">
<i>const dato1=’Confundido’</i></p>
<ul>
	<li><p style="line-height: 100%">Ahora si se llama el vector en la
	posición de la función se habría confundido con el ultimo dato1
	así;</p>
</ul>
<p style="line-height: 100%; margin-bottom: 0cm"><i>const result =
vector.dato2 ():</i></p>
<p style="line-height: 100%"><i>console.log (result)  //resultado
‘Confundido’</i></p>
<ul>
	<li><p style="line-height: 100%">En cambio sí se usa .bind</p>
</ul>
<p style="line-height: 100%; margin-bottom: 0cm"><i>const result =
vector.dato2.bind (vector) ;};</i></p>
<p style="line-height: 100%; margin-bottom: 0.42cm"><i><font color="#000000"><font face="Calibri, sans-serif"><span lang="en-US"><b>console.log
(result) //resultado ‘Hola’</b></span></font></font></i></p>

</div>
<div class="col-md-4 mx-auto">
<a href="../react.php" class="btn btn-success" role="button" >Regresar a Menu React</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>