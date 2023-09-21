<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">USUARIOS EN MySQL</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%; margin-bottom: 0cm">En un gestor de BD
hay que tomar en cuenta quien tiene acceso a la información ya que
es diferente que ingrese el administrador que debería tener acceso a
todas las cosas a un usuario cualquiera que solo debería tener
acceso a x información, a continuación se dan pautas para el manejo
de usuarios en MySQL.</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<h3 class="western" style="line-height: 100%; margin-top: 0cm; margin-bottom: 0.42cm"><a name="__RefHeading___Toc21258_3870395435"></a><a name="_Toc77961465"></a><a name="_Toc77645199"></a><a name="_Toc77598872"></a>
<font face="Calibri, sans-serif"><b>Crear nuevo usuario en MySQL</b></font></h3>
<p style="line-height: 100%; margin-bottom: 0cm">Para crear un nuevo
usuario en MySQL se utiliza el comando CREATE USER el cual permite
especificar el nombre del usuario y se acompaña del comando
IDENTIFIED BY que permite asignar una clave de acceso al usuario así:</p>
<p lang="en-US" align="center" style="line-height: 100%; margin-bottom: 0cm">
<i>CREATE USER 'NomNuevoUsuario'@'localhost' IDENTIFIED BY
'ClaveNuevoUsuario';</i></p>
<h3 class="western" style="line-height: 100%; margin-top: 0cm; margin-bottom: 0.42cm">
</h3>
<h3 class="western" style="line-height: 100%; margin-top: 0cm; margin-bottom: 0.42cm"><a name="__RefHeading___Toc21260_3870395435"></a><a name="_Toc77961466"></a><a name="_Toc77645200"></a><a name="_Toc77598873"></a>
<font face="Calibri, sans-serif"><b>Ver usuarios creados en MySQL</b></font></h3>
<p style="line-height: 100%; margin-bottom: 0cm">Para ver los
usuarios creados en MySQL se utiliza el comando <i>SELECT</i> el cual
permite especificar lo que se quiere ver de los usuarios ya sean
cosas como el host (computadora donde están almacenados dichos
usuarios), etc. Sin embargo hay que utilizar el comando <i>FROM</i>
para seleccionar la carpeta o archivo donde MySQL almacena los
usuarios (mysql.user), por lo que el comando completo seria:  
</p>
<p lang="en-US" align="left" style="line-height: 100%; margin-bottom: 0cm">
<i>SELECT User, Host, Plugin FROM mysql.user;</i></p>
<h3 class="western" align="left" style="line-height: 100%"><a name="__RefHeading___Toc11192_1211687985"></a><a name="_Toc77961467"></a><a name="_Toc77645201"></a><a name="_Toc77598874"></a>
<font face="Calibri, sans-serif"><b>Acceso de información
(privilegios usuarios)  MySQL</b></font></h3>
<p style="line-height: 100%; margin-top: 0.42cm; margin-bottom: 0cm">Para
dar privilegios de acceso a un usuario en MySQL se utiliza el comando
<i>GRANT así:</i></p>
<p style="line-height: 100%"><span lang="en-US"><i>GRANT
NomPrivilegio ON NombBaseDatos.* TO 'NomUsuario'@'localhost';</i></span></p>
<p style="line-height: 100%"><span lang="es-ES">Dónde</span><span lang="en-US">:</span></p>
<ul>
	<li><p style="line-height: 100%">GRANT= Permite especificar el tipo
	de acceso o privilegio que se le dará al usuario cambiando 
	NomPrivilegio por algún privilegio nombrado a continuación:</p>
</ul>
<table width="368" cellpadding="4" cellspacing="0">
	<col width="201"/>

	<col width="149"/>

	<tr valign="top">
		<td width="201" style="border-top: 1px solid #000000; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0cm; padding-left: 0.1cm; padding-right: 0cm"><p>
			<i>ALL PRIVILEGES</i></p>
		</td>
		<td width="149" style="border-top: 1px solid #000000; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.1cm; padding-bottom: 0cm; padding-left: 0.1cm; padding-right: 0.1cm"><p>
			Para todos los privilegios</p>
		</td>
	</tr>
	<tr valign="top">
		<td width="201" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm"><p lang="en-US" align="left">
			SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, RELOAD, PROCESS,
			REFERENCES, INDEX, ALTER, SHOW DATABASES, CREATE TEMPORARY TABLES,
			LOCK TABLES, EXECUTE, REPLICATION SLAVE, REPLICATION CLIENT,
			CREATE VIEW, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, CREATE
			USER, EVENT, TRIGGER</p>
		</td>
		<td width="149" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm"><p align="left">
			Nombre de posibles privilegios, para colocar varios privilegios
			separarlos con coma.</p>
			<p>Ejemplo: privilegio para seleccionar e insertar tablas</p>
			<p><i>GRANT SELECT, INSERT ON</i></p>
		</td>
	</tr>
</table>
<p style="line-height: 100%"><br/>
<br/>

</p>
<ul>
	<li><p style="line-height: 100%">ON= permite especificar la BD o
	lugar a que se dará el privilegio/acceso para ello se coloca el
	nombre de la BD acompañado de un punto y un asterisco (.*) o para
	dar acceso a todas las BD se coloca el asterisco así (*.*)</p>
	<li><p style="line-height: 100%">TO= permite especificar a qué
	usuario se le dará el privilegio cambiando NomUsuario por el
	usuario al que se le dará acceso.</p>
</ul>
<p style="line-height: 100%">También existe la posibilidad de crear
un usuario que pueda editar todo inclusive los privilegios o accesos
de otros usuarios con el comando WITH GRANT OPTION así:</p>
<p style="line-height: 100%"><span lang="en-US"><i>GRANT All
PRIVILEGES ON *.* TO 'NomUsuario'@'localhost' </i></span><code><font face="Calibri, sans-serif"><span lang="en-US"><i>WITH
GRANT OPTION;</i></span></font></code></p>
<p style="line-height: 100%; margin-bottom: 0.42cm"><font color="#000000"><code><font color="#000000"><font face="Calibri, sans-serif"><font size="2" style="font-size: 11pt"><i><span style="font-weight: normal">Conocidos
gran parte de los comandos del sistema de gestión de BD MySQL se
sabe más o menos como trabaja este por consola, ahora se puede
examinar un software para hacer el servidor y poder acceder a la BD
como Node.</span></i></font></font></font></code></font></p>


</div>
<div class="col-md-4 mx-auto">
<a href="../mysql.php" class="btn btn-success" role="button" >Regresar a Menu Mysql</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>