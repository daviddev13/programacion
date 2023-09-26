<?php include('../includes/header.php'); ?>


<?php
if (isset($_GET['parte'])) {
    $parte = $_GET['parte'];
    if ($parte == 0) {
        printf('
		<h2 class="col-md-4 mx-auto">Instalar Git</h2>
        <div class="container" style="width: 46rem;">

          <p>Para instalar Git se sigue:</p>
          
		  <ol>
	         <li><p>Descargar programa de acuerdo a sistema operativo en la página oficial:</p>
		  </ol>
          <p><a href="http://www.git-scm.com/" target="_top">
		  <i>www.git-scm.com</i></a></p>

		  <ol start="2">
	         <li><p>Instalar Git según sistema operativo para sistemas operativos
	                basados en Linux es con el comando por consola:
				 </p>
          </ol>
        
		   <p><i>apt-get install git</i></p>

        </div>
        ');
    } elseif ($parte == 1) {
        printf('
        <h2 class="col-md-4 mx-auto">Ver versión instalada de Git</h2>
        <div class="container" style="width: 46rem;">
        
        <p>En sistemas
        operativos basados en Linux se puede comprobar la versión instalada
        con el comando por consola:
		</p>

        <p><code>git–versión </code>
		</p>

		</div>
     ');
    } elseif ($parte == 2) {
        printf('
        <h2 class="col-md-4 mx-auto">Iniciar Git en una APP</h2>
        <div class="container" style="width: 46rem;">
        
        
        <p>Abrir consola desde ruta dónde se encuentra la APP 
		y crear una carpeta vacía en la carpeta del proyecto 
		a través del comando:
		</p>
       
		<p></p>
        
		<p><code>git init </code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Empezar Repositorio (Local+Stage) 
		</p>
        
		</div>
        ');
    } elseif ($parte == 3) {
        printf('
		<h2 class="col-md-4 mx-auto">Configurar quien accede a git</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>config -l</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>config --list</code></td>
				<td>mirar la identidad del repositorio </td>
			</tr>
			<tr>
			    <td><code>config --list --show-origin</code></td>
			    <td>rutas de acceso a la configuración de git</td>
		    </tr>
            <tr>
               <td><code>config --global --replace-all user.name “nombreModificado”</code></td>
               <td>Modifica nombre usuario</td>
            </tr>
            <tr>
               <td><code>config --global --unset-all user.name</code></td>
               <td>Elimina nombre usuario</td>
            </tr>
            <tr>
               <td><code>config --global --add user.name “nombre”</code></td>
               <td>Adiciona un nuevo nombre de usuario</td>
            </tr>
             <tr>
               <td><code>config --global user.email “email”</code></td>
               <td>Asigna un email al usuario </td>
            </tr>
		</table>
		</div>
        
        ');
    } elseif ($parte == 4) {
        printf('	
        ');
    } elseif ($parte == 5) {
        printf('
        ');
    } elseif ($parte == 6) {
        printf('
	');
    } elseif ($parte == 8) {
        printf('
        ');
    }
    else {
        echo 'Parte no válida';
    }
} else {
    echo 'Por favor, selecciona una parte.';
}
?>

</div>
<div class="col-md-4 mx-auto">
<a href="../git.php" class="btn btn-success" role="button" >Regresar a Menu Git</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>