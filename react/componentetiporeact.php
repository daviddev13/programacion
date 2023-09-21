<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Componentes tipo React</h2>
<div class="container" style="width: 46rem;">


<p style="line-height: 100%; margin-top: 0.2cm; margin-bottom: 0.2cm">
Un componente en React es un elemento inventado para ser renderizado,
por lo que le permitieron tener un estado diferente al de la
aplicación general  y  recibir diferentes propiedades.</p>
<p style="line-height: 100%; margin-top: 0.2cm; margin-bottom: 0.2cm">
<font color="#000000">Ahora una vez se tenga exportada la clase o la
función se habrá convertido en un componente tipo React y se podrá
llamar en un código diferente u otro archivo.js así:</font></p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><i>&lt;NomFuncionImportada&gt;&lt;/NomFuncionImportada&gt;</i></font></p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><i>&lt;NomClaseImportada&gt;&lt;/NomClaseImportada&gt;</i></font></p>
<p align="left" style="line-height: 100%; margin-top: 0.2cm; margin-bottom: 0.2cm">
<font color="#000000">Además se podrá pasar o crear propiedades
dentro de dicho componente como si fueran atributos </font><font color="#000000"><i>dentro
de la clase o la función importada así:</i></font></p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><i>&lt;NomFuncionImport
atributo=”XX”&gt;&lt;/NomFuncionImport&gt;</i></font></p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><i>&lt;NomClaseImport
atributo=”XX”&gt;&lt;/NomClaseImport&gt;</i></font></p>
<p style="line-height: 100%; margin-top: 0.2cm; margin-bottom: 0cm">Dónde:</p>
<ul>
	<li><p style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">atributo
	= Nombre para identificar la propiedad o el atributo creada por el
	desarrollador</font></p>
	<li><p align="left" style="line-height: 100%; margin-top: 0.1cm; margin-bottom: 0.1cm">
	<font color="#000000">XX= Propiedad que se quiere llamar o asignar
	puede ser por ejemplo:</font></p>
</ul>
<table width="409" cellpadding="1" cellspacing="0">
	<col width="83"/>

	<col width="80"/>

	<col width="40"/>

	<col width="197"/>

	<tr valign="top">
		<td width="83" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<font color="#000000">Una</font></p>
		</td>
		<td width="80" style="border: 1px solid #000000; padding: 0cm 0.02cm"><p align="left">
			<font color="#000000"><i>declarada</i></font></p>
		</td>
		<td width="40" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<font color="#000000"><i>entre</i></font></p>
		</td>
		<td width="197" style="border: 1px solid #000000; padding: 0.1cm"><p align="left">
			<font color="#000000">Atributo</font></p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="83" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<font color="#000000">cadena texto</font></p>
		</td>
		<td width="80" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.02cm"><p align="left">
			<br/>

			</p>
		</td>
		<td width="40" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<font color="#000000">“”</font></p>
		</td>
		<td width="197" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p align="left">
			<font color="#000000"><i>atributo=“String”</i></font></p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="83" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<font color="#000000">matriz </font>
			</p>
		</td>
		<td width="80" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.02cm"><p align="left">
			<font color="#000000"><u>en el constructor</u></font></p>
		</td>
		<td width="40" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<font color="#000000"><i>{}</i></font></p>
		</td>
		<td width="197" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p align="left">
			<font color="#000000"><i>atributo={this.state.NomMatriz}</i></font></p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="83" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<font color="#000000">variable </font>
			</p>
		</td>
		<td width="80" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.02cm"><p align="left">
			<font color="#000000"><u>en el constructor</u></font></p>
		</td>
		<td width="40" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<font color="#000000"><i>{}</i></font></p>
		</td>
		<td width="197" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p align="left">
			<font color="#000000"><i>atributo={this.state.NomMatriz}</i></font></p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="83" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<font color="#000000">función </font>
			</p>
		</td>
		<td width="80" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.02cm"><p align="left">
			<font color="#000000"><u>Dentro de la clase</u></font></p>
		</td>
		<td width="40" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<font color="#000000"><i>{}</i></font></p>
		</td>
		<td width="197" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p align="left">
			<font color="#000000"><i>atributo={this.funcion}</i></font></p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td width="83" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<font color="#000000">función </font>
			</p>
		</td>
		<td width="80" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.02cm"><p align="left">
			<font color="#000000">dentro de una clase</font><font color="#000000"><u>
			de otro archivo</u></font></p>
		</td>
		<td width="40" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p align="left">
			<font color="#000000"><i>{}</i></font></p>
		</td>
		<td width="197" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p align="left">
			<font color="#000000"><i>atributo={this.props.funcion}</i></font></p>
		</td>
	</tr>
</table>
<p align="left" style="line-height: 100%; margin-top: 0.1cm; margin-bottom: 0.1cm">
<font color="#000000"><font color="#000000"> </font></font>
</p>

</div>
<div class="col-md-4 mx-auto">
<a href="../react.php" class="btn btn-success" role="button" >Regresar a Menu React</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>