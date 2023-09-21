<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Cambiar/Fijar propiedades en
React (SetState)</h2>
<div class="container" style="width: 46rem;">


<p style="line-height: 100%">Para cambiar propiedades (props) siempre
y cuando se halla definido el código en una clase se puede usar
SetState () así:</p>
<p align="center" style="line-height: 100%; margin-bottom: 0.05cm">
<i>this.setState ({NomVariable: valor})</i></p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm">Dónde:</p>
<ul>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm">NomVariable=Variable
	declarada en this.state</p>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm">valor=Nueva
	asignación a la variable, que puede ser un  true /false, un vector
	, un string, un numero</p>
	<li><p align="left" style="line-height: 100%">También se pueden
	fijar datos con .setstate (Asincrónicamente) a través de funciones
	flecha así:</p>
</ul>
<p lang="en-US" align="left" style="line-height: 100%"><i>this.setState
((state, props) =&gt; ({vectorX: [...state.datos]})</i></p>
<p align="left" style="line-height: 100%; margin-bottom: 0.42cm"><font color="#000000"><font face="Calibri, sans-serif"><span lang="en-US"><i><span style="font-weight: normal">Lo
cual significa que para la función flecha que recibe State y props
lleve o fije nuevos datos al vector X que posee unos datos citados en
State.</span></i></span></font></font></p>

</div>
<div class="col-md-4 mx-auto">
<a href="../react.php" class="btn btn-success" role="button" >Regresar a Menu React</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>