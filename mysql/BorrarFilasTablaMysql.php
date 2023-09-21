<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Borrar filas de una tabla en MySQL </h2>
<div class="container" style="width: 46rem;">


<p style="line-height: 100%; margin-bottom: 0cm">Para borrar una fila
de una tabla en MySQL se utiliza el comando <i>DELETE FROM</i>
acompañado de WHERE para decir la ubicación de un dato de la fila
se desea borrar así:</p>
<p style="line-height: 100%; margin-bottom: 0cm"><i>DELETE FROM
NomTabla WHERE NomColumna=datoFila;</i></p>
<p style="line-height: 100%; margin-bottom: 0cm"><b>OJO:</b> Cuando
se desea borrar varias filas de la tabla se especifican los datos de
las filas adicionando el comando IN así:</p>
<p style="line-height: 100%; margin-bottom: 0cm"><i>DELETE FROM
NomTabla WHERE NomColumna IN (datoFila, datoFila, datoFila, datoFila,
datoFila);</i></p>
<h3 class="western" style="line-height: 100%; margin-top: 0cm; margin-bottom: 0.42cm">
</h3>
<h3 class="western" style="line-height: 100%; margin-top: 0cm; margin-bottom: 0.42cm">
<font face="Calibri, sans-serif"><b>

</div>
<div class="col-md-4 mx-auto">
<a href="../mysql.php" class="btn btn-success" role="button" >Regresar a Menu Mysql</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>