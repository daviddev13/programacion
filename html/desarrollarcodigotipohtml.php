<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Desarrollar código tipo HTML</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%; margin-bottom: 0cm"><font color="#010101">Para
programar un código en lenguaje HTML, simplemente se escribe un
esqueleto del código (ver esqueleto de un código HTML) en cualquier
editor de texto (Visual Studio Code, Bloc de notas, Geany, etc.) y se
guardar con la extensión .html por ejemplo en un bloc de notas se
guarda entre comillas así:</font></p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm">“<i>nombredeprograma.html”</i></p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p style="line-height: 100%; margin-bottom: 0cm">Un ejemplo de un
código con lenguaje HTML cuyo objetivo sea crear un formulario que
contenga un espacio que pida el nombre al usuario y un botón para
que este pueda enviar el dato o su nombre a la ubicación (URL)
llamada enlace1 seria:</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p lang="en-US" align="left" style="line-height: 100%; margin-bottom: 0.05cm">
<i>&lt;! DOCTYPE html&gt;</i></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-bottom: 0.05cm">
<i>&lt;html&gt;</i></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-bottom: 0.05cm">
    <i>&lt;head&gt;</i></p>
<p align="left" style="line-height: 100%; margin-bottom: 0.05cm">    
   <span lang="en-US"><i>&lt;title&gt; pedir nombre &lt;/title&gt;  </i></span>
</p>
<p lang="en-US" align="left" style="line-height: 100%; margin-bottom: 0.05cm">
        <i>&lt;meta charset=&quot;UTF-8&quot;&gt;</i></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-bottom: 0.05cm">
    <i>&lt;/head&gt;</i></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-bottom: 0.05cm">
  <i>&lt;body&gt;</i></p>
<p align="left" style="line-height: 100%; margin-bottom: 0.05cm">    
<i>&lt;form action=&quot;/enlace1&quot;&gt;</i></p>
<p align="left" style="line-height: 100%; margin-bottom: 0.05cm">    
     <i>Escriba su nombre:</i></p>
<p align="left" style="line-height: 100%; margin-bottom: 0.05cm">    
         <span lang="en-US"><i>&lt;input type=&quot;name&quot;
name=&quot;nombreusuario&quot;        placeholder=&quot;nombre&quot;&gt;</i></span></p>
<p align="left" style="line-height: 100%; margin-bottom: 0.05cm">    
       <span lang="en-US"><i>&lt;button&gt;enviar nombre&lt;/button&gt;</i></span></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-bottom: 0.05cm">
    <i>&lt;/form&gt;</i></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-bottom: 0.05cm">
   <i>&lt;/body&gt;</i></p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><i>&lt;/html&gt;</i></p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p style="line-height: 100%; margin-bottom: 0cm">Al probar o correr
el código HTML del ejemplo anterior es decir, copiarlo en un Bloc de
notas, guardarlo con la extensión .html y abrirlo en un navegador
(Google, Mozilla, Opera, etc.)  Se podrá observar el resultado del
código como una imagen similar a esta:</p>
<p style="line-height: 100%; margin-bottom: 0cm"><img src="desarrollarcodigotipohtml_html_3ae9cd4ca5ae4a5.png" name="Image12" align="left" width="368" height="27" border="0"/>
<br/>

</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p style="line-height: 100%; margin-bottom: 0cm">Además si
interactúa con la página dando clic en el botón (enviar nombre)
vera en las direcciones del navegador algo así:</p>
<p align="center" style="line-height: 100%; margin-bottom: 0cm"><i>file:///enlace1?nombreusuario=</i></p>
<p style="line-height: 100%; margin-bottom: 0cm">Significa que el
formulario que contiene una entrada cuyo nombre es <i>nombreusuario</i>
(ver código línea 10) ha sido enviado a la ubicación <i>enlace1</i>.</p>
<p style="line-height: 100%; margin-bottom: 0.42cm">Hasta aquí ya se
sabe lo básico de HTML y algunas formas de interactuar con usuarios
a través de formularios, sin embargo HTML también permite
<u>relacionar un código HTML con otros archivos </u>para hacer más
cosas como se verá a continuación.</p>

</div>
<div class="col-md-4 mx-auto">
<a href="../html.php" class="btn btn-success" role="button" >Regresar al Menu</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>