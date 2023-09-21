<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Cambiar nombre APP subida en
Heroku</h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%">Si se quiere cambiar el nombre de la APP
que se creó en Heroku se usa el comando por consola:</p>
<pre style="line-height: 100%; text-align: center"><code><font color="#000000"><font face="Calibri, sans-serif"><font size="2" style="font-size: 11pt"><span lang="en-US"><i>heroku apps:rename newname --app oldname</i></span></font></font></font></code>

<code><font color="#000000"><font face="Calibri, sans-serif"><font size="2" style="font-size: 11pt">Dónde:</font></font></font></code></pre>
<ul>
	<li><pre style="line-height: 100%; text-align: left"><code><font color="#000000"><font face="Calibri, sans-serif"><font size="2" style="font-size: 11pt">newname=nuevo nombre de la APP</font></font></font></code></pre>
	<li><pre style="line-height: 100%; text-align: left; margin-bottom: 0.42cm"><code><font color="#000000"><font face="Calibri, sans-serif"><font size="2" style="font-size: 11pt"><span style="font-style: normal"><span style="font-weight: normal">oldname=nombre de la APP a cambiar</span></span></font></font></font></code></pre>
</ul>

</div>
<div class="col-md-4 mx-auto">
<a href="../heroku.php" class="btn btn-success" role="button" >Regresar a Menu</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>