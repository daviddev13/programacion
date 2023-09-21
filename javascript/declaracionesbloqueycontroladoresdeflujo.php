<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Declaraciones de Bloque y Controladores de flujo en JavaScript</h2>
<div class="container" style="width: 46rem;">

<p lang="zxx" style="line-height: 100%; margin-bottom: 0cm"><code><font face="Calibri, sans-serif">Aparte
de los operadores para validar cosas y las funciones para tareas
específicas también existen en los lenguajes de programación una
forma de agrupar instrucciones dentro de corchetes que se llaman
</font></code><code><font face="Calibri, sans-serif"><i><u>declaraciones
de bloque</u></i></font></code><code><font face="Calibri, sans-serif">.</font></code></p>
<p lang="zxx" style="line-height: 100%; margin-bottom: 0cm"><code><font face="Calibri, sans-serif">Dichos
</font></code><code><font face="Calibri, sans-serif"><i>declaradores
de bloque</i></font></code><code><font face="Calibri, sans-serif">
necesitan tener un control por lo que generalmente van acompañadas
de unos </font></code><code><font face="Calibri, sans-serif"><i><u>controladores
de flujo</u></i></font></code><code><font face="Calibri, sans-serif">
que determinan el orden de las instrucciones a dichas agrupaciones, a
continuación se nombran algunos </font></code><code><font face="Calibri, sans-serif"><i><u>controladores
de flujo</u></i></font></code><code><font face="Calibri, sans-serif">
muy útiles para la creación de todo tipo de programas:</font></code></p>
<p lang="zxx" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<table width="368" cellpadding="4" cellspacing="0">
	<col width="77"/>

	<col width="273"/>

	<tr valign="top">
		<td width="77" height="8" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			Declaración</p>
		</td>
		<td width="273" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm"><p>
			Útil para</p>
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
		<td width="77" height="80" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			<span lang="en-GB">While</span></p>
		</td>
		<td width="273" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p>
			Llenar variables con datos, esta solo se ejecuta <u>mientras</u>
			se cumpla una condición y se repite hasta que deje de cumplirse
			la condición a diferencia de<span lang="es-ES"> </span><span lang="es-ES"><i>if</i></span>
			que evalúa la condición una sola vez.</p>
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
		<td width="77" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			<span lang="en-GB">if</span>...<span lang="en-GB">else</span></p>
		</td>
		<td width="273" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p>
			Validar una condición puntual.</p>
			<p>Va de la mano con<span lang="es-ES"> </span><span lang="es-ES"><i><u>else</u></i></span>
			la cual se usa cuando la condición puntual no se cumple. 
			</p>
			<p>También se acompaña por<span lang="es-ES"> </span><span lang="es-ES"><i><u>Throw</u></i></span>
			que lanza una excepción al<span lang="es-ES"> </span><span lang="es-ES"><i>if</i></span>
			con un valor determinado ejemplo: <span lang="es-ES"> </span><span lang="es-ES"><i>if</i></span><i>
			(error)</i><span lang="es-ES"><i> throw</i></span><i> error;</i></p>
			<p>Si se produce error genere una excepción o arroje un valor con
			el error.</p>
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
		<td width="77" height="10" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			<span lang="es-ES">Switch</span></p>
		</td>
		<td width="273" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0.1cm"><p>
			Manejar varias condiciones <span lang="es-ES"><i>if</i></span> <span lang="es-ES">
			</span>
			</p>
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
		<td width="77" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			Try...catch</p>
		</td>
		<td width="273" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p lang="zxx">
			<code><font face="Calibri, sans-serif">Controlar o ver los errores
			al momento de estar escribiendo las sentencias de un código.
			También se usa para recibir respuestas desde el servidor.</font></code></p>
		</td>
	</tr>
</table>
<h3 class="western" style="line-height: 100%; margin-top: 0cm; margin-bottom: 0.42cm">
</h3>

</div>
<div class="col-md-4 mx-auto">
<a href="../js.php" class="btn btn-success" role="button" >Regresar a Menu</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>