<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Cambiar password de MySQL </h2>
<div class="container" style="width: 46rem;">

<p style="line-height: 100%; margin-bottom: 0cm">Una vez dentro de
MySQL se puede personalizar el password con el siguiente comando:</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p align="left" style="line-height: 100%; margin-left: 2.5cm; margin-bottom: 0cm">
<span lang="en-US"><i>ALTER USER ‘root’@‘localhost’
IDENTIFIED WITH mysql_native_password BY ‘clave’;</i></span></p>
<p style="line-height: 100%; margin-bottom: 0cm"><b>OJO:</b> En clave
colocar la clave personal que se quiere.</p>


</div>
<div class="col-md-4 mx-auto">
<a href="../mysql.php" class="btn btn-success" role="button" >Regresar a Menu Mysql</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>