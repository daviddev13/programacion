<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Ejemplo de CSS</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%; margin-bottom: 0cm">A continuación se
puede observar un ejemplo sencillo que tiene como objetivo mostrar
una imagen (extensión .jpg) dentro de una página web HTML ajustada
a un tamaño de 200 píxeles. Para hacer este ejemplo se necesita
crear una carpeta con tres archivos:</p>
<ul>
	<li><p style="line-height: 100%; margin-bottom: 0cm">1 archivo con
	una imagen cualquiera cuya extensión en este caso es .jpg y se
	nombra como <u>logo.jpg</u></p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">1 archivo con
	el código HTML cuyo título es <u>ejemploCSS</u></p>
	<li><p style="line-height: 100%; margin-bottom: 0cm">1 archivo con
	el código CSS cuyo archivo se llama <u>edicion.css</u></p>
</ul>
<p style="line-height: 100%; margin-bottom: 0cm">El código HTML
seria:</p>
<p style="line-height: 100%; margin-bottom: 0.05cm"><i>&lt;! DOCTYPE
html&gt;</i></p>
<p lang="en-US" style="line-height: 100%; margin-bottom: 0.05cm"><i>&lt;html&gt;</i></p>
<p lang="en-US" style="line-height: 100%; margin-bottom: 0.05cm">   
<i>&lt;head&gt;</i></p>
<p lang="en-US" style="line-height: 100%; margin-bottom: 0.05cm">    
 <i>&lt;meta charset=&quot;UTF-8&quot; /&gt;</i></p>
<p style="line-height: 100%; margin-bottom: 0.05cm">      
<span lang="en-US"><i>&lt;Title&gt;ejemploCSS&lt;/title&gt;</i></span></p>
<p style="line-height: 100%; margin-bottom: 0.05cm">       <span lang="en-US"><i>&lt;link
rel=&quot;stylesheet&quot; href=&quot;edicion.css&quot;&gt;</i></span></p>
<p lang="en-US" style="line-height: 100%; margin-bottom: 0.05cm">  
<i>&lt;/head&gt;</i></p>
<p lang="en-US" style="line-height: 100%; margin-bottom: 0.05cm">  
<i>&lt;body&gt;</i></p>
<p style="line-height: 100%; margin-bottom: 0.05cm">       <span lang="en-US"><i>&lt;img
src=&quot;logo.jpg&quot;/&gt;</i></span></p>
<p style="line-height: 100%; margin-bottom: 0.05cm">   <i>&lt;/body&gt;</i></p>
<p style="line-height: 100%; margin-bottom: 0.05cm"><i>&lt;/html&gt;</i></p>
<p style="line-height: 100%; margin-bottom: 0.05cm"><br/>
<br/>

</p>
<p style="line-height: 100%; margin-bottom: 0.05cm">En el código
HTML se puede ver:</p>
<ul>
	<li><p style="line-height: 100%; margin-bottom: 0.05cm">El título
	de la página web con el elemento &lt;title&gt; (línea 5)</p>
	<li><p style="line-height: 100%; margin-bottom: 0.05cm">La relación
	del código HTML con el archivo CSS dentro del head a través del
	elemento &lt;link&gt; (línea 6)</p>
	<li><p style="line-height: 100%; margin-bottom: 0.05cm">La  adición
	de la imagen con el elemento &lt;img&gt; (línea 9)</p>
	<li><p style="line-height: 100%; margin-bottom: 0.05cm">También
	importante notar que los atributos del código <i>href</i> y <i>src</i>
	solo tienen el nombre del archivo con su extensión ya que así es
	cuando están ubicados todos los archivos en la misma carpeta.</p>
</ul>
<p style="line-height: 100%; margin-bottom: 0.05cm"><br/>
<br/>

</p>
<p style="line-height: 100%; margin-bottom: 0.05cm">El código en CSS
para editar la imagen adicionada seria:</p>
<p lang="en-US" style="line-height: 100%; margin-top: 0.42cm; margin-bottom: 0cm">
<i>img {</i></p>
<p lang="en-US" style="line-height: 100%; margin-bottom: 0cm">       
    <i>width: auto;</i></p>
<p lang="en-US" style="line-height: 100%; margin-bottom: 0cm">       
    <i>height: 200px;</i></p>
<p style="line-height: 100%; margin-bottom: 0cm">        <i>}</i></p>
<p style="line-height: 100%; margin-bottom: 0.05cm"><br/>
<br/>

</p>
<p style="line-height: 100%; margin-bottom: 0.05cm">En el código CSS
se puede ver:</p>
<p style="line-height: 100%; margin-bottom: 0.05cm"><font color="#222222"><font face="Calibri, sans-serif"><i><b><span style="background: #ffffff">-
 El elemento HTML a editar en este caso el elemento que contiene la
imagen (img) y las propiedades que se le darán a la imagen como son
una altura de 200 píxeles y un ancho automático de acuerdo a la
pantalla de cada computador.</span></b></i></font></font></p>

</div>
<div class="col-md-4 mx-auto">
<a href="../css.php" class="btn btn-success" role="button" >Regresar al Menu</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>