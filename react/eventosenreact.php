<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Eventos en React</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%"><font color="#000000">E</font>n
programación un evento se usa para generar un resultado cada vez que
un usuario realiza una acción como: pulsar una tecla, mover el
ratón, redimensionar la ventana del navegador, etc. En React y otros
lenguajes para manejar o controlar <font color="#000000">eventos  se
hace por medio de acciones </font><font color="#000000"><i>ON</i></font><font color="#000000">
así:</font></p>
<ol>
	<li><p style="line-height: 100%"><font color="#000000">Se define una
	función que contenga lo que se realizara cuando ocurre el evento,
	esta se hace fuera del render y tiene por variable el evento a
	controlar (e) así:</font></p>
</ol>
<center>
	<table width="294" cellpadding="4" cellspacing="0">
		<col width="175"/>

		<col width="101"/>

		<tr valign="top">
			<td width="175" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="center" style="margin-bottom: 0cm">
				<font color="#000000"><i>function NomFuncion(e){</i></font></p>
				<p align="center"><font color="#000000"><i>e.preventDefault();}</i></font></p>
			</td>
			<td width="101" style="border: 1px solid #000000; padding: 0.1cm"><p>
				función normal</p>
			</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr valign="top">
			<td width="175" height="20" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="center" style="margin-bottom: 0cm">
				<font color="#000000"><i>NomFuncion=(e)=&gt;{</i></font></p>
				<p align="center"><font color="#000000"><i>e.preventDefault();}</i></font></p>
			</td>
			<td width="101" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p>
				función flecha</p>
			</td>
		</tr>
	</table>
</center>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Dónde:</font></p>
<ul>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">NomFuncion=Nombre
	que reconoce la función que se realiza cuando ocurre x evento.</font></p>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">.preventDefault
	()= Función para prevenir errores en la APP ya que generalmente al
	nombrar un evento  este tiene un primer valor por defecto en la
	primera llamada que puede no relacionarse con la acción del
	usuario.</font></p>
</ul>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<ol start="2">
	<li><p align="left" style="line-height: 100%; margin-top: 0.1cm; margin-bottom: 0.1cm">
	<font color="#000000">Hecha la función ya se puede usar dentro del
	render del código React citando el evento a controlar así:</font></p>
</ol>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><i>onEvento=
{this.NomFuncion}</i></font></p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><i>Dónde:</i></font></p>
<ul>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><i>onEvento=nombre
	del evento en React usando camelCase </i></font>
	</p>
	<table width="317" cellpadding="4" cellspacing="0">
		<col width="134"/>

		<col width="79"/>

		<col width="78"/>

		<tr valign="top">
			<td width="134" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
				Evento</p>
			</td>
			<td width="79" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
				En React</p>
			</td>
			<td width="78" style="border: 1px solid #000000; padding: 0.1cm"><p>
				Se usa en un</p>
			</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr valign="top">
			<td width="134" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
				Usuario subió un formulario</p>
			</td>
			<td width="79" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
				onSubmit</p>
			</td>
			<td width="78" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p>
				&lt;form&gt;</p>
			</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr valign="top">
			<td width="134" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left" style="margin-bottom: 0cm">
				Usuario cambio opción de un <span lang="es-ES">&lt;select</span>&gt;</p>
				<p align="left">o un &lt;input&gt;</p>
			</td>
			<td width="79" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
				onChange</p>
			</td>
			<td width="78" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p style="margin-bottom: 0cm">
				<span lang="en-GB">&lt;select</span>&gt;</p>
				<p>&lt;input&gt;</p>
			</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr valign="top">
			<td width="134" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
				Usuario movió el ratón</p>
			</td>
			<td width="79" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
				onMousemove  
				</p>
			</td>
			<td width="78" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p>
				&lt;div&gt;</p>
			</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr valign="top">
			<td width="134" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
				Usuario da clic con el ratón</p>
			</td>
			<td width="79" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
				onClick</p>
			</td>
			<td width="78" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p>
				&lt;button&gt;</p>
			</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr valign="top">
			<td width="134" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
				Usuario soltó el botón del ratón</p>
			</td>
			<td width="79" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
				onMouseup</p>
			</td>
			<td width="78" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p>
				&lt;p&gt;</p>
			</td>
		</tr>
	</table>
	<li><p style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><span lang="es-ES">this</span></font><font color="#000000">=
	Quiere decir que cuando suceda el Evento nombrado busque en la misma
	clase tipo React la función llamada NomFuncion.  </font>
	</p>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">NomFuncion=Nombre
	que se le dio a la función en la definición fuera del render paso
	1</font><font color="#000000"><i>.</i></font></p>
</ul>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><i><b>OJO:</b></i></font>
En render también se puede citar un evento a partir de otro evento
así:</p>
<p align="center" style="line-height: 100%"><font color="#000000"><i><font color="#000000"><font face="Calibri, sans-serif"><span lang="en-US"><b>onEvento2
= {props.onEvento1}</b></span></font></font></i></font></p>

</div>
<div class="col-md-4 mx-auto">
<a href="../react.php" class="btn btn-success" role="button" >Regresar a Menu React</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>