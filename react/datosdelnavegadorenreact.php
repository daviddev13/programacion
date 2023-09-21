<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Tomar datos del navegador en
React</h2>
<div class="container" style="width: 46rem;">


<p style="line-height: 100%">Otra de las ventajas de React es la
fácil toma de datos del navegador a partir de un evento con target
así:</p>
<p style="line-height: 100%" align="center"><i>evento.taget</i></p>
<p style="line-height: 100%; margin-bottom: 0cm"> Dónde:</p>
<p style="line-height: 100%">    • evento= Nombre de la variable en
la función definida para que se ejecutara cuando se realiza el
evento (ver eventos) 
</p>
<p style="line-height: 100%">Ejemplo: Se renderiza un elemento
&lt;input&gt; tipo text  que  tiene relacionado un Evento onChange.</p>
<p style="line-height: 100%" lang="en-US" align="left"><i>&lt;input
type="text" onChange= {this.x} placeholder=""&gt;&lt;/input&gt;</i></p>
<p style="line-height: 100%">Al digitar el input desde el navegador
cambia el elemento por lo que se acciona la función del evento (x)
que es la sgte:</p>
<p style="line-height: 100%; margin-bottom: 0cm"><i>function x (e) {</i></p>
<p style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm" align="left">
<font color="#000000"><i>e.preventDefault ();</i></font></p>
<p style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<i>const obtengo=e.target</i></p>
<p style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<i>console.log (obtengo) //que obtuvo del navegador}</i> 
</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br>

</p>
<p style="line-height: 100%; margin-bottom: 0cm">Como se puede ver
desde la función que activo el evento con .target se puede obtener
el valor que se digito en el input.</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br>

</p>
<p style="line-height: 100%"> <b>OJO: </b>Utilizando e.target salen
todos los objetos tomados desde el navegador, si quiere el valor que
digito el usuario en el &lt;input&gt; este se encuentra en la
posición .value de la matriz target así:</p>
<p style="line-height: 100%; margin-bottom: 0.42cm" align="center"><font color="#000000">
<i><font face="Calibri, sans-serif"><span lang="en-US"><b>e.target.value</b></span></font></i></font></p>

</div>
<div class="col-md-4 mx-auto">
<a href="../react.php" class="btn btn-success" role="button" >Regresar a Menu React</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>