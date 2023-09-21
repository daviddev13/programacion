<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">NAVEGADOR EN BOOTSTRAP</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%"><br/>
<br/>

</p>
<h3 class="western" style="line-height: 100%; margin-top: 0cm; margin-bottom: 0.42cm"><a name="__RefHeading___Toc21380_3870395435"></a><a name="_Toc77961553"></a><a name="_Toc77645286"></a><a name="_Toc77598959"></a>
<font face="Calibri, sans-serif"><b>Barra de Navegación (App Node)</b></font></h3>
<p style="line-height: 100%"><font color="#000000">Una vez se
habilite el uso de Bootstrap en la APP-Node hay código ya
desarrollado para barras de Navegación, este se obtiene de la página
oficial de Bootstrap </font><font color="#000000"><i> getbotstrap.com</i></font><font color="#000000">
en la pestaña:</font></p>
<p align="center" style="line-height: 100%"><i>Docs +</i><span lang="es-ES"><i>
Components</i></span><i> + Navbar + Nav</i></p>
<p style="line-height: 100%"><font color="#000000">Una vez obtenido
el código este se copia en una nueva plantilla de Node guardada en
la carpeta</font><font color="#000000"><span lang="es-ES"> Partials</span></font><font color="#000000">
(Carpeta que corresponde a los archivos parciales es decir los que
tienen en común varias plantillas o páginas de la APP). Sin embargo
una vez guardada la plantilla hay que habilitarla en el cuerpo (Body)
de la APP-Node para poder verla, eso se conoce como crear parciales.</font></p>
<p style="line-height: 100%; margin-bottom: 0cm">Para crear parciales
en una plantilla HBS (handlebars) esto se hace con los símbolos
{{&gt;}} en la plantilla<span lang="es-ES"> layout</span> dentro del
elemento &lt;body&gt; así:</p>
<p align="center" style="line-height: 100%"> <i>{{&gt;NomPlantilla}}</i></p>
<p style="line-height: 100%; margin-bottom: 0cm">Dónde:
NomPlantilla= Nombre de la nueva plantilla guardada en la carpeta<span lang="es-ES">
Partials</span>.</p>
<h3 class="western" style="line-height: 100%; margin-top: 0cm; margin-bottom: 0.42cm">
</h3>
<h3 class="western" style="line-height: 100%; margin-top: 0cm; margin-bottom: 0.42cm"><a name="__RefHeading___Toc21382_3870395435"></a><a name="_Toc77961554"></a><a name="_Toc77645287"></a><a name="_Toc77598960"></a>
<font face="Calibri, sans-serif"><span lang="es-ES"><b>Dropdown</b></span></font><font face="Calibri, sans-serif"><b>
para barras de navegación</b></font></h3>
<p style="line-height: 100%; margin-bottom: 0cm">Una vez creada una
barra de navegación en una APP-Node esta se puede volver una barra
de navegación más completa o con más botones que se desplieguen de
ella, para esto se debe ir al lugar Dónde está el código de la
barra de navegación (carpeta<span lang="es-ES"> partials</span>) y
copiar el siguiente código del<span lang="es-ES"> </span><font color="#000000"><span lang="es-ES">dropdown</span></font><font color="#000000">
dentro de un elemento &lt;ul&gt; de la barra:</font></p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p lang="en-US" style="line-height: 100%; margin-bottom: 0cm"><i>&lt;li
class=&quot;nav-item dropdown&quot;&gt;</i></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-bottom: 0cm">
          <i>&lt;div class=&quot;dropdown&quot;&gt;</i></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
 <i>&lt;button class=&quot;btn btn-secondary dropdown-    toggle&quot;
type=&quot;button&quot; id=&quot;dropdownMenuButton&quot;
data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot;
aria-expanded=&quot;false&quot;&gt;</i></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-bottom: 0cm">
           <i>Titulo del Dropdown</i></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-bottom: 0cm">
           <i>&lt;/button&gt;</i></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<i>&lt;div class=&quot;dropdown-menu&quot;
aria-labelledby=&quot;navbarDropdown&quot;&gt;</i></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<i>&lt;a class=&quot;dropdown-item&quot; href=&quot;/enlace&quot;&gt;texto1&lt;/a&gt;</i></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-bottom: 0cm">
          <i>&lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;</i></p>
<p lang="en-US" align="left" style="line-height: 100%; margin-left: 1.25cm; margin-bottom: 0cm">
<i>&lt;a class=&quot;dropdown-item&quot; href=&quot;/enlace&quot;&gt;texto2&lt;/a&gt;</i></p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm">       
  <i>&lt;/div&gt;</i></p>
<p align="left" style="line-height: 100%; margin-bottom: 0cm">       
  <i>&lt;/div&gt;</i></p>
<p style="line-height: 100%; margin-bottom: 0cm">  <i>&lt;/li&gt;</i></p>



</div>
<div class="col-md-4 mx-auto">
<a href="../bootstrap.php" class="btn btn-success" role="button" >Regresar al Menu</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>