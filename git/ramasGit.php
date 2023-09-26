<?php include('../includes/header.php'); ?>

<?php
if (isset($_GET['p'])) {
    $p = $_GET['p'];
    if ($p == 0) {
        printf('
        <h2 class="col-md-4 mx-auto">Crea Rama Nueva</h2>

        <div class="container" style="width: 46rem;">
        
        <table>
        <tr>
            <th>Comando</th>
            <th>Descripción</th>
        </tr>
        <tr>
            <td><code>git branch NomRama</code></td>
            <td>Crea Rama nueva (Estar en rama q desea copiar)</td>
        </tr>
        <tr>
        </table>

        <p></p>
        
        </div>
		
        ');
    } elseif ($p == 1) {
        printf('
		<h2 class="col-md-4 mx-auto">Cambiar de Rama</h2>

		<div class="container" style="width: 46rem;">

		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>checkout nombreRama</code></td>
				<td>Cambiar de Rama</td>
			</tr>
		</table>
		</div>
     ');
    } elseif ($p == 2) {
        printf('
		<h2 class="col-md-4 mx-auto">Ver Ramas e Historia de Cambios en Ramas </h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>branch</code></td>
				<td>ramas</td>
			</tr>
			<tr>
				<td><code>branch -r</code></td>
				<td>todas las ramas remotas</td>
			</tr>
			<tr>
				<td><code>branch -a</code></td>
				<td>todas las ramas (locales y remotas)</td>
			</tr>
            <tr>
                <td><code>show-branch</code></td>
                <td>ramas existentes e historia rapida</td>
            </tr>
            <tr>
                <td><code>show-branch --all</code></td>
                <td>ramas existentes e historia recien de cada rama</td>
            </tr>
		</table>
		</div>
        ');
    } elseif ($p == 3) {
        printf('
		<h2 class="col-md-4 mx-auto">Eliminar Ramas Obsoletas</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>branch -d</code></td>
				<td>elimina rama obsoleta despues de un merge</td>
			</tr>
		</table>
		</div>
        
        ');
    } elseif ($p == 4) {
        printf('
		<h2 class="col-md-4 mx-auto">Traer Cambios Desde Otra Rama a un Archivo </h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>checkout NomRama NomArchivo.extension</code></td>
				<td>Restaurar/Traer cambios realizados desde NomRama a NomArchivo.extension en la rama actual (Donde estas parado) </td>
			</tr>
		</table>
		</div>
        
        ');
    } elseif ($p == 5) {
        printf('
		<h2 class="col-md-4 mx-auto">(cherry-pick) Corregir bugs rapido (reconstruyendo historia commits)</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>git cherry-pick #commit</code></td>
				<td>Se aplicara el commit especifico en la rama actual como un nuevo commit</td>
			</tr>
            <tr>
				<td><code>git cherry-pick --abort</code></td>
				<td>Deshace cuando se genera conflictos </td>
			</tr>
		</table>
		</div>
        
        ');
    } elseif ($p == 6) {
        printf('
		<h2 class="col-md-4 mx-auto">(Merge) Unir/fusionar Commits de 2 Ramas</h2>
		<p>
		   Merge realiza la fusion de 2 ramas. 
		   Se usa principalmente para fusionar
		   los cambios traidos con Fetch a una 
		   Repositorio Git y fusionarlo 
		   a los datos o ramas en el Disco Duro 
		</p>
		
		<div class="container" style="width: 46rem;">
		
        <table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>git merge</code></td>
				<td>Crea un commit que une los ultimos commits de dos ramas se aplica en la rama donde esta = invocarlo siempre en la principal</td>
			</tr>
            <tr>
				<td><code>git merge --abort</code></td>
				<td>Cancelar merge</td>
			</tr>
		</table>

		</div>
        <div class="container" style="width: 46rem;">
        <h5>Conflictos en Merge</h5>

        <ol>
            <li>Merge muestra conflicto</li>
            <li>Se busca solucion para el conflicto generalmente el conflicto usa los símbolos &gt;&gt;&gt;</li>
            <li>Se mira el estado de los archivos</li>
            <li>Se hace un commit con la corrección del conflicto</li>
        </ol>
        </div>
        ');
    } elseif ($p == 7) {
        printf('
        <h2 class="col-md-4 mx-auto">(Rebase) Combinar ramas/hacer fusion se usa solo en Repositorios locales (cambia la historia)</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>git checkout RamaDesaparecer</code></td>
				<td>parado en rama a desaparecer</td>
			</tr>
			<tr>
				<td><code>git rebase nomRama</code></td>
				<td>Traslapa rama hacia punta de nomRama
                (ojo el dice si master no ha cambiado no realiza la union)</td>
			</tr>
			<tr>
				<td><code>git checkout nomRama</code></td>
				<td>parado en rama a mantener</td>
			</tr>
            <tr>
                <td><code>git rebase RamaDesaparecer</code></td>
                <td>Hacer fusion</td>
            </tr>
            <tr>
                <td><code>git branch -D nomrama</code></td>
                <td>se borra la rama</td>
            </tr>
		</table>
		</div>
        ');
    }
    else {
        echo 'Parte no válida';
    }
} else {
    echo 'Por favor, selecciona una parte.';
}
?>

<div class="col-md-4 mx-auto">
<a href="../git.php" class="btn btn-success" role="button" >Regresar a Menu Git</a>
</div>

<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>