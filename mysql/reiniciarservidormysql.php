<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Reiniciar Servidor MySQL</h2>
<div class="container" style="width: 46rem;">



<p style="line-height: 100%; margin-bottom: 0cm">Para guardar
configuraciones hay que resetear el servido con el comando</p>
<p style="line-height: 100%; margin-bottom: 0cm"><br/>

</p>
<p align="center" style="line-height: 100%; margin-bottom: 0.42cm"><font face="Calibri, sans-serif"><b>sudo
systemctl restart mysql.service</b></font></p>

</div>
<div class="col-md-4 mx-auto">
<a href="../mysql.php" class="btn btn-success" role="button" >Regresar a Menu Mysql</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>