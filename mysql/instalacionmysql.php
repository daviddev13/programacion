<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Instalación de MySQL</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%; margin-bottom: 0cm">La instalación de
MySQL depende del sistema operativo en la computadora, para los
sistemas operativos Linux (basados en Ubuntu) el proceso de
instalación por medio de consola seria:</p>
<ol>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm">Abrir
	una consola del sistema operativo</p>
</ol>
<p align="center" style="line-height: 100%; margin-left: 1.27cm; margin-bottom: 0cm">
<i>(Ctrl + Alt + T)</i></p>
<ol start="2">
	<li><p style="line-height: 100%; margin-bottom: 0cm">Se actualizan
	los archivos del sistema operativo con el comando (asegurarse de
	estar conectado a internet):</p>
</ol>
<p align="center" style="line-height: 100%; margin-left: 1.27cm; margin-bottom: 0cm">
<i>sudo apt-g</i><i>e</i><i>t</i><span lang="en-GB"><i> update</i></span></p>
<p align="center" style="line-height: 100%; margin-left: 1.27cm; margin-bottom: 0cm">
<span lang="en-GB"><i>sudo apt update &amp;&amp; sudo apt upgrade</i></span></p>
<p align="center" style="line-height: 100%; margin-left: 1.27cm; margin-bottom: 0cm">
<br/>

</p>
<ol start="3">
	<li><p style="line-height: 100%; margin-bottom: 0cm">Se instalan los
	paquetes de MySQL (MySQL servidor y MySQL cliente) con el comando:</p>
</ol>
<p lang="en-US" align="center" style="line-height: 100%; margin-bottom: 0cm">
<i>sudo apt install mysql-server mysql-client</i></p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><b>OJO:</b>
</p>
<ul>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm">Si
	el sistema operativo no tiene el paquete de Mysql descargar e
	instalar paquete apt según versión del sistema operativo (por
	ejemplo debían) en la pagina:</p>
	<p align="left" style="line-height: 100%; margin-bottom: 0cm"></p>
</ul>
<p align="center" style="line-height: 100%; margin-bottom: 0cm">
<a href="https://dev.mysql.com/">https://dev.mysql.com/</a></p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p align="justify" style="line-height: 100%; margin-bottom: 0cm">Para
instalar el paquete se hace con el comando dpkg en una consola
ubicada en la carpeta de descarga así:</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm">sudo
dpkg -i NombrePaqueteDescargado</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p align="justify" style="line-height: 100%; margin-bottom: 0cm">Luego
proceder los pasos de instalacion</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<ul>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm">Se
	instalan ambos paquetes (cliente y servidor) cuando se quiere que el
	mismo computador actué como servidor conservando los datos y como
	cliente permitiendo consultas.</p>
	<li><p align="left" style="line-height: 100%; margin-bottom: 0.42cm">
	<font color="#000000"><font face="Calibri, sans-serif"><font size="2" style="font-size: 11pt"><i><b>Si
	durante la instalación MySQL pide alguna clave o usuario colocar
	root.</b></i></font></font></font></p>
</ul>


</div>
<div class="col-md-4 mx-auto">
<a href="../mysql.php" class="btn btn-success" role="button" >Regresar a Menu Mysql</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>