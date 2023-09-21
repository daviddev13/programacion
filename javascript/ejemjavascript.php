<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Ejemplo de JavaScript</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%; margin-bottom: 0cm"><code><font face="Calibri, sans-serif">Mostrar
un mensaje de alerta dentro de una página web HTML.</font></code></p>
<p style="line-height: 100%; margin-bottom: 0cm"><code><font face="Calibri, sans-serif">Para
hacerlo se necesita crear una carpeta con 2 archivos con los códigos
y abrir el código HTML en un navegador:</font></code></p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<ul>
	<li><p style="line-height: 100%; margin-bottom: 0cm">Archivo con el
	<u>código HTML</u> cuyo título es <u>ejemploJS</u></p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">Archivo con el
	<u>código JS</u> cuyo archivo se llama <u>alerta.js</u></p>
</ul>
<p style="line-height: 100%; margin-top: 0.42cm; margin-bottom: 0cm">El
código HTML seria:</p>
<p style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0.05cm">
<i>&lt;! DOCTYPE html&gt;</i></p>
<p lang="en-US" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0.05cm">
<i>&lt;html&gt;</i></p>
<p lang="en-US" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0.05cm">
         <i>&lt;head&gt;</i></p>
<p lang="en-US" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0.05cm">
               <i>&lt;meta charset=&quot;UTF-8&quot; /&gt;</i></p>
<p lang="en-US" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0.05cm">
               <i>&lt;title&gt;ejemploJS&lt;/title&gt;</i></p>
<p lang="en-US" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0.05cm">
               <i>&lt;script src=&quot;alerta.js&quot;&gt;&lt;/script&gt;</i></p>
<p style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0.05cm">
         <i>&lt;/head&gt;</i></p>
<p style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0.05cm">
        <i>&lt;body&gt;&lt;/body&gt;</i></p>
<p style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0.05cm">
<i>&lt;/html&gt;</i></p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p style="line-height: 100%; margin-bottom: 0.05cm">En el código
HTML se puede ver:</p>
<ul>
	<li><p style="line-height: 100%; margin-bottom: 0.05cm">La relación
	del código HTML con el archivo JS dentro del &lt;head&gt; con el
	elemento &lt;script&gt; línea 6</p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">También notar
	que el atributo <i>src</i> solo tiene el nombre del archivo con su
	extensión ya que todos los archivos están ubicados en la misma
	carpeta.</p>
</ul>
<p style="line-height: 100%; margin-bottom: 0.05cm"><br/>
<br/>

</p>
<p style="line-height: 100%; margin-bottom: 0.05cm">El código en JS
para sacar el mensaje de alerta seria:</p>
<p align="left" style="line-height: 100%; margin-left: 1.25cm; margin-top: 0.42cm; margin-bottom: 0.05cm">
<i>alert (&quot;Un mensaje de prueba&quot;);</i></p>
<p style="line-height: 100%; margin-top: 0.42cm; margin-bottom: 0.05cm">
En el código JS se puede ver:</p>
<p style="line-height: 100%; margin-bottom: 0.05cm"><font color="#010101"><font face="Calibri, sans-serif"><font size="4" style="font-size: 14pt"><b>-
 El uso de la función </b></font></font><font face="Calibri, sans-serif"><font size="4" style="font-size: 14pt"><i><b>alert</b></i></font></font><font face="Calibri, sans-serif"><font size="4" style="font-size: 14pt"><b>
con un mensaje tipo texto entre comillas.</b></font></font></font></p>

</div>
<div class="col-md-4 mx-auto">
<a href="../js.php" class="btn btn-success" role="button" >Regresar a Menu</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>