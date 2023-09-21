<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Relacionar HTML con archivos
externos</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%; margin-bottom: 0cm">Para relacionar
archivos externos a un código HTML y poder tener más cosas
dinámicas se usan los elementos <i>&lt;link&gt;</i> y <i>&lt;script&gt;</i>
dependiendo del archivo que se quiere relacionar:</p>
<table width="368" cellpadding="4" cellspacing="0">
	<col width="63"/>

	<col width="132"/>

	<col width="147"/>

	<tbody>
		<tr valign="top">
			<td width="63" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
				Elemento</p>
			</td>
			<td width="132" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
				Sirve</p>
			</td>
			<td width="147" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm"><p>
				Tipo de archivo</p>
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
			<td width="63" style="border-top: 1px solid #000000; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0cm; padding-left: 0.1cm; padding-right: 0cm"><p>
				<i>&lt;link&gt; &lt;/link&gt;</i></p>
			</td>
			<td width="132" style="border-top: 1px solid #000000; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0cm; padding-left: 0.1cm; padding-right: 0cm"><p>
				Relaciona un archivo externo a un HTML y se coloca dentro de la
				cabecera del código HTML.</p>
			</td>
			<td width="147" style="border-top: 1px solid #000000; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0cm; padding-left: 0.1cm; padding-right: 0.1cm"><p>
				CSS  (hoja de estilos) se usan para editar mejor una página al
				modificar porcentajes, anchos, etc. y no solo píxeles como en
				HTML.</p>
			</td>
		</tr>
		<tr valign="top">
			<td width="63" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p style="margin-bottom: 0cm">
				<i>&lt;script&gt;</i></p>
				<p><i>&lt;/script&gt;</i></p>
			</td>
			<td width="132" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
				Relaciona un archivo externo a un HTML y se coloca dentro de la
				cabecera del código HTML</p>
			</td>
			<td width="147" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p>
				JavaScript (JS) archivos que tienen botones,  anuncios o alertas
				dinámicas de mejor interacción con los usuarios que los básicos
				de HTML.</p>
			</td>
		</tr>
	</tbody>
</table>
<p style="line-height: 100%; margin-top: 0.3cm; margin-bottom: 0.65cm">
Ahora al igual que todos los elementos en HTML <i>&lt;link&gt;</i> y
<i>&lt;script&gt;</i> también tienen atributos que los definen como
son:</p>
<table width="368" cellpadding="4" cellspacing="0">
	<col width="63"/>

	<col width="214"/>

	<col width="65"/>

	<tr valign="top">
		<td width="63" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			Atributo</p>
		</td>
		<td width="214" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			Define</p>
		</td>
		<td width="65" style="border: 1px solid #000000; padding: 0.1cm"><p align="left">
			Elemento que lo permite</p>
		</td>
	</tr>
</table>
<p style="display: none; line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<table width="368" cellpadding="4" cellspacing="0">
	<col width="63"/>

	<col width="214"/>

	<col width="65"/>

	<tr valign="top">
		<td width="63" height="129" style="border-top: 1px solid #000000; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			<b>rel</b></p>
		</td>
		<td width="214" style="border-top: 1px solid #000000; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0cm; padding-left: 0.1cm; padding-right: 0cm"><p style="margin-bottom: 0cm">
			El tipo de documento que se quiere citar por ejemplo:</p>
			<p style="margin-bottom: 0cm">- Para relacionar una hoja de estilo
			(stylesheet en inglés)   seria:</p>
			<p align="center"><i>&lt;link rel=&quot;stylesheet&quot;&gt;&lt;/link&gt;</i></p>
		</td>
		<td width="65" style="border-top: 1px solid #000000; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0cm; padding-left: 0.1cm; padding-right: 0.1cm"><p>
			<i>&lt;link&gt;</i></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="63" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			<b>href</b></p>
		</td>
		<td width="214" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.1cm; padding-right: 0cm"><p style="margin-bottom: 0cm">
			La dirección, ubicación del enlace o la URL por ejemplo:</p>
			<p style="margin-bottom: 0cm">- Un archivo llamado xx de extensión
			.css ubicado en la carpeta k así:</p>
			<p style="margin-bottom: 0cm"><br/>

			</p>
			<p align="center"><font color="#000000"><span lang="en-US"><i>&lt;link
			rel=&quot;stylesheet&quot; href=’k/xx.css’&gt;</i></span></font><span lang="en-US"><i>&lt;/link&gt;</i></span></p>
		</td>
		<td width="65" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.1cm"><p>
			<i>&lt;link&gt;</i></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="63" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			<b>src</b></p>
		</td>
		<td width="214" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p style="margin-bottom: 0cm">
			<font color="#000000">La ubicación del archivo .js (JavaScript)
			por ejemplo relacionar un archivo llamado  cosas.js  ubicado en la
			carpeta L seria: </font><font color="#010101"><i> </i></font>
			</p>
			<p align="center"><font color="#010101"><span lang="en-US"><i>&lt;script
			src=</i></span></font><font color="#000000"><span lang="en-US"><i>&quot;L/cosas.js&quot;</i></span></font><font color="#010101"><span lang="en-US"><i>&gt;&lt;/script&gt;</i></span></font><font color="#010101"><span lang="en-US">
			 </span></font>
			</p>
		</td>
		<td width="65" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p align="center">
			<font color="#010101">&lt;script&gt;&lt;/script&gt;</font></p>
		</td>
	</tr>
</table>
<h2 class="western" align="center" style="line-height: 100%; margin-top: 0cm; margin-bottom: 0.42cm">
</h2>

</div>
<div class="col-md-4 mx-auto">
<a href="../html.php" class="btn btn-success" role="button" >Regresar al Menu</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>