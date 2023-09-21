<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Formularios en HTML</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%">A continuación se describen algunos
elementos útiles para hacer formularios en HTML siendo el elemento
<i>&lt;form&gt;</i> que viene de la palabra formulario el más
importante:</p>
<table width="368" cellspacing="0" cellpadding="4">
	<colgroup><col width="87">

	<col width="262">

	</colgroup><tbody>
		<tr valign="top">
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="87" height="12"><p>
				Elemento</p>
			</td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm" width="262"><p>
				Sirve</p>
			</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
	</tbody>
	<tbody>
		<tr valign="top">
			<td style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.1cm; padding-right: 0cm" width="87"><p>
				<i>&lt;form&gt; &lt;/form&gt;</i></p>
			</td>
			<td style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.1cm" width="262"><p>
				Para recolectar información de usuarios a través de
				formularios, queda siempre puesto dentro del cuerpo del programa.</p>
			</td>
		</tr>
		<tr valign="top">
			<td style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.1cm; padding-right: 0cm" width="87"><p style="margin-bottom: 0cm">
				<i>&lt;button&gt;</i></p>
				<p><i>&lt;/button&gt;</i></p>
			</td>
			<td style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.1cm" width="262"><p>
				Para crear botones que confirmen algún movimiento de usuario,
				por ejemplo un botón para confirmar la subida de un formulario.</p>
			</td>
		</tr>
		<tr valign="top">
			<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="87"><p style="margin-bottom: 0cm">
				<i>&lt;input&gt;</i></p>
				<p><i>&lt;/input&gt;</i></p>
			</td>
			<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm" width="262"><p>
				Para crear espacios donde el usuario pueda digitar cosas como una
				cadena de texto, una URL o enlace, etc.</p>
			</td>
		</tr>
	</tbody>
</table>
<p style="line-height: 100%; margin-bottom: 0cm"><br>

</p>
<p style="line-height: 100%; margin-bottom: 0cm">Ahora los atributos
principales para definir el comportamiento de dichos elementos son:</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br>

</p>
<table width="366" cellspacing="0" cellpadding="4">
	<colgroup><col width="81">

	<col width="172">

	<col width="87">

	</colgroup><tbody><tr valign="top">
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="81"><p>
			Atributo</p>
		</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="172"><p>
			Define</p>
		</td>
		<td style="border: 1px solid #000000; padding: 0.1cm" width="87"><p>
			Elemento que lo permite</p>
		</td>
	</tr>
</tbody></table>
<table width="368" cellspacing="0" cellpadding="4">
	<colgroup><col width="81">

	<col width="172">

	<col width="89">

	</colgroup><tbody><tr valign="top">
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="81"><p>
			action:</p>
		</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="172"><p style="margin-bottom: 0cm">
			La URL a Dónde se envían los datos adquiridos en un formulario o
			 hacia Dónde irá la información ingresada por ejemplo:</p>
			<table width="173" cellspacing="0" cellpadding="4">
				<colgroup><col width="44">

				<col width="110">

				</colgroup><tbody><tr valign="top">
					<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="44"><p>
						Lugar</p>
					</td>
					<td style="border: 1px solid #000000; padding: 0.1cm" width="110"><p>
						Colocar</p>
					</td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr valign="top">
					<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="44"><p>
						Correo</p>
					</td>
					<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm" width="110"><p>
						Correo</p>
					</td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr valign="top">
					<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="44"><p style="margin-bottom: 0cm">
						Base</p>
						<p>de datos</p>
					</td>
					<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm" width="110"><p>
						URL del código que recibe la información o el servidor</p>
					</td>
				</tr>
			</tbody></table>
			<p style="line-height: 100%; margin-left: 1.27cm; margin-bottom: 0cm">
			<br>

			</p>
		</td>
		<td style="border: 1px solid #000000; padding: 0.1cm" width="89"><p style="line-height: 100%; margin-bottom: 0cm">
			<span lang="en-US"><i>&lt;form action=”correo@correo.com"</i></span><span lang="en-US">&gt;</span></p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="81"><p style="line-height: 100%; margin-bottom: 0cm">
			method:</p>
		</td>
		<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="172"><p style="line-height: 100%" align="left">
			Forma en que se envían datos o viaja la información en una APP,
			pueden ser:</p>
			<p style="line-height: 100%" align="left">-<b>post: </b>trabaja la
			información oculta de la APP la cual necesita herramientas para
			verla.</p>
			<p style="line-height: 100%" align="left">-<b>get: </b>muestra la
			información pública o que puede estar a la vista en el
			navegador, generalmente viaja separada por símbolos tipo ?,
			&amp;(espacio),  %40(@)-</p>
		</td>
		<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm" width="89"><p style="line-height: 100%" lang="en-US">
			<i>&lt;form method="post"&gt;</i></p>
			<p style="line-height: 100%"><span lang="en-US"><i>&lt;form
			method="get"&gt;</i></span></p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="81"><p style="line-height: 100%; margin-bottom: 0cm">
			enctype:</p>
		</td>
		<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="172"><p style="line-height: 100%; margin-bottom: 0cm">
			La codificación al  adjuntar archivos en un formulario, por
			ejemplo:</p>
			<p style="line-height: 100%; margin-bottom: 0cm">- Envió de
			archivos sin codificación:</p>
			<p style="line-height: 100%; margin-bottom: 0cm"><i>&lt;form
			enctype="text/plain"&gt;</i></p>
			<p style="line-height: 100%; margin-bottom: 0cm">- Envió de
			archivos codificados:</p>
			<p style="line-height: 100%; margin-bottom: 0cm" lang="en-US"><i>&lt;form
			enctype="multipart/form-data"&gt;</i></p>
			<p style="line-height: 100%; margin-bottom: 0cm" align="left"><b>OJO:</b>
			si no define <i>enctype</i> por defecto será
			<i>application/x-www-form-urlencoded </i>que significa todo
			codificado, lo más conveniente cuando se trabajan cosas en el
			lado cliente o Front-end.</p>
		</td>
		<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm" width="89"><p style="line-height: 100%">
			&lt;form&gt;</p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="81" height="32"><p style="line-height: 100%; margin-bottom: 0cm">
			name</p>
		</td>
		<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="172"><p style="line-height: 100%; margin-bottom: 0cm">
			El nombre que se le dará a un elemento para poder ubicar los
			datos en otro código.</p>
		</td>
		<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm" width="89"><p style="line-height: 100%; margin-bottom: 0cm">
			<i>&lt;input&gt;</i></p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="81" height="32"><p style="line-height: 100%; margin-bottom: 0cm">
			Type</p>
		</td>
		<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="172"><p style="line-height: 100%; margin-bottom: 0cm">
			El tipo de cadena que se ingresa, algunos tipos de cadena son:</p>
			<table width="172" cellspacing="0" cellpadding="7">
				<colgroup><col width="62">

				<col width="80">

				</colgroup><tbody><tr valign="top">
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="62"><p>
						Button</p>
					</td>
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="80"><p align="left">
						un botón</p>
					</td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr valign="top">
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="62"><p>
						Object</p>
					</td>
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="80"><p align="left">
						un objeto</p>
					</td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr valign="top">
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="62"><p>
						Code</p>
					</td>
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="80"><p align="left">
						un código</p>
					</td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr valign="top">
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="62"><p>
						Menu</p>
					</td>
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="80"><p align="left">
						un menú</p>
					</td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr valign="top">
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="62"><p>
						Text</p>
					</td>
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="80"><p align="left">
						textos de una sola fila</p>
					</td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr valign="top">
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="62"><p>
						url</p>
					</td>
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="80"><p align="left">
						ubicaciones</p>
					</td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr valign="top">
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="62"><p>
						Date</p>
					</td>
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="80"><p align="left">
						Fechas</p>
					</td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr valign="top">
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="62"><p>
						File</p>
					</td>
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="80"><p align="left">
						tipo de archivo con su extensión</p>
					</td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr valign="top">
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="62"><p>
						Password</p>
					</td>
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="80"><p align="left">
						contraseñas ya que oculta sus caracteres</p>
					</td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr valign="top">
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="62"><p>
						Number</p>
					</td>
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="80"><p align="left">
						Números</p>
					</td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr valign="top">
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="62"><p>
						Image</p>
					</td>
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="80"><p align="left">
						Imágenes</p>
					</td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr valign="top">
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="62"><p>
						Submit</p>
					</td>
					<td style="border: 1px solid #000000; padding: 0cm 0.19cm" width="80"><p align="left">
						envió de formulario</p>
					</td>
				</tr>
			</tbody></table>
			<p style="line-height: 100%; margin-bottom: 0cm"><br>

			</p>
		</td>
		<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm" width="89"><p style="line-height: 100%; margin-bottom: 0cm">
			<i>&lt;input&gt;</i></p>
		</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr valign="top">
		<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="81" height="31"><p style="line-height: 100%; margin-bottom: 0cm">
			placeholder</p>
		</td>
		<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm" width="172"><p style="line-height: 100%; margin-bottom: 0cm">
			Texto de ayuda al usuario que sale en navegador para saber que
			colocar en cada espacio de un formulario.</p>
		</td>
		<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm" width="89"><p style="line-height: 100%; margin-bottom: 0cm">
			<i>&lt;input&gt;</i></p>
		</td>
	</tr>
</tbody></table>
<p style="line-height: 100%; margin-bottom: 0cm"><br>

</p>


</div>
<div class="col-md-4 mx-auto">
<a href="../html.php" class="btn btn-success" role="button" >Regresar al Menu</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>