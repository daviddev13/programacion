<?php include('../includes/header.php'); ?>

<?php
if (isset($_GET['parte'])) {
    $parte = $_GET['parte'];
    if ($parte == 0) {
        printf('
		<h2 class="col-md-4 mx-auto">Almacenar temporalmente archivos antes de confirmar commit (Stash)</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>git stash</code></td>
				<td>Regresa la rama al estado anterior y guarda en temporal archivos modificados y eliminados (no creados).</td>
			</tr>
			<tr>
				<td><code>git stash save "mensaje"</code></td>
				<td>Se adiciona un mensaje descriptivo al stash.</td>
			</tr>
			<tr>
				<td><code>git stash -u</code></td>
				<td>Guarda en temporal archivos fuera de stage (nuevos).</td>
			</tr>
			<tr>
				<td><code>git stash list</code></td>
				<td>Muestra guardado en temporal con números de referencia.</td>
			</tr>
			<tr>
				<td><code>git stash pop</code></td>
				<td>Revierte el último stash guardado y aplica los cambios al stage.</td>
			</tr>
			<tr>
				<td><code>git stash pop stash@{#stash}</code></td>
				<td>Revierte un stash específico y aplica los cambios al stage.</td>
			</tr>
			<tr>
				<td><code>git stash branch NomRama</code></td>
				<td>guardar cambios del stash y pongalos en stage de Nomrama</td>
			</tr>
			<tr>
				<td><code>git stash branch NomRama stash@{#stash}</code></td>
				<td>guardar cambios del stash y pongalos en stage de Nomrama</td>
			</tr>
			<tr>
				<td><code>git stash drop</code></td>
				<td>Borra el último stash guardado en temporal (dato 0).</td>
			</tr>
			<tr>
				<td><code>git stash drop stash@{#stash}</code></td>
				<td>Borra un stash específico (usando su número de referencia) almacenado en temporal.</td>
			</tr>
			<tr>
				<td><code>git stash apply stash@{#stash}</code></td>
				<td>Trae un stash específico (usando su número de referencia) sin eliminarlo.</td>
			</tr>
			<tr>
				<td><code>git stash clear</code></td>
				<td>Borra todos los stash almacenados en temporal.</td>
			</tr>
		</table>
		</div>
        ');
    } elseif ($parte == 1) {
        printf('
		<h2 class="col-md-4 mx-auto">sacar un archivo modificado del stage</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>restore --staged</code></td>
				<td>sacar un archivo modificado del staged</td>
			</tr>
		</table>
		</div>

     ');
    } elseif ($parte == 2) {
        printf('
		<h2 class="col-md-4 mx-auto">Enmendar archivos subidos a Git o errores en commits</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>git commit --amend</code></td>
				<td>enmendar ultimo commit agregando cambios (no remoto = conflictos)</td>
			</tr>
			<tr>
				<td><code>git commit --amend -m</code></td>
				<td>enmendar commit y mensaje del commit</td>
			</tr>
			<tr>
				<td><code>git commit --amend --no-edit</code></td>
				<td>enmendar commit sin editar mensaje</td>
			</tr>
		</table>
		</div>
      
        ');
    } elseif ($parte == 3) {
        printf('
		<h2 class="col-md-4 mx-auto">Eliminar archivos de Git (Conservardo historial de Commits)</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>rm archivo.txt</code></td>
				<td>Elimina archivo de carpeta git completamente</td>
			</tr>
			<tr>
				<td><code>rm --cached</code></td>
				<td>Elimina archivo de carpeta y del stage pero lo tiene Saca un archivo nuevo del stage</td>
			</tr>
			<tr>
			    <td><code>rm --force</code></td>
			    <td>Elimina archivos de carpeta y del disco duro</td>
		    </tr>
		</table>
		</div>
        
        ');
    } elseif ($parte == 4) {
        printf('
		<h2 class="col-md-4 mx-auto">Forzar borrado</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>git clean --dry-run </code></td>
				<td>revisar archivos a borrar (sin add)</td>
			</tr>
			<tr>
				<td><code>git clean -f</code></td>
				<td> forzar borrado (no carpetas + no ignore + no add)</td>
			</tr>
		</table>
		</div>
        
        ');
    } elseif ($parte == 5) {
        printf('
		<h2 class="col-md-4 mx-auto">Modificar archivo a como era antes</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>checkout serialcomit nombrearchivo.txt</code></td>
				<td>Modificar archivo a como era antes (commit garantiza cambio)</td>
			</tr>
		</table>
		</div>
        
        ');
    } elseif ($parte == 6) {
        printf('
		<h2 class="col-md-4 mx-auto">Agregar directamente todas las modificaciones sin separar archivos a repositorio Git (Saltar stage)</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>commit -am "mensaje"</code></td>
				<td>Agregar todos los cambios a repositorio git con un solo commit (no utilizar add)</td>
			</tr>
		</table>
		</div>
        ');
    } elseif ($parte == 7) {
        printf('
		<h2 class="col-md-4 mx-auto">Deshacer cambios o borrar commits (cambiar historia)</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>reset serialcomit --hard</code></td>
				<td>Saca de git y saca del DD   desaparecen todos los commit y lo de stage</td>
			</tr>
			<tr>
				<td><code>reset -mixed </code></td>
				<td> saca de git y lleva al DD   desaparecen todos los commit y lo de stage</td>
			</tr>
			<tr>
				<td><code>reset serialcomit --soft </code></td>
				<td>saca de git y lleva a stage para aplicar últimos cambios en un nuevo commit </td>
			</tr>
		</table>
		</div>
        ');
    }elseif ($parte == 8) {
        printf('
		<h2 class="col-md-4 mx-auto">Deshacer cambios sin afectar historia y mantener archivos con cambios</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>git reset -head</code></td>
				<td>Saca del stage y los lleva a inicial (cancela cambio antes de confirmar con commit)</td>
			</tr>
			<tr>
				<td><code>git reset HashDelHEAD</code></td>
				<td>regresamos al # de HEAD anterior antes del commit</td>
			</tr>
		   <tr>
			 <td><code>git reset --soft HashDelHEAD </code></td>
			 <td>mantiene lo que tengas en stage ahí </td>
		   </tr>
		   <tr>
			  <td><code>git reset --HARD #commit</code></td>
			  <td>Regresa rama actual y Head justo antes del commit incluye Stage</td>
		   </tr>
		    <tr>
		      <td><code>git revert</code></td>
		      <td>Crea nuevo commit que deshace los cambios del ultimo commit o el commit especificado</td>
	        </tr>
		</table>
		</div>
        ');
    }elseif ($parte == 9) {
        printf('
		<h2 class="col-md-4 mx-auto">Subir archivos listos en Stage a Repositorio Git para control de versiones
</h2> 
<div class="container" style="width: 46rem;">


<p>Una ves adicionados los archivos a
Git, desde una consola ubicada en la carpeta principal del
proyecto (root) se confirma la subida con un respectivo mensaje que
identifica la modificación así:</p>
<p><i><span style="font-weight: normal">git
commit – m ‘mensaje </span></i><i>de identificacion de subida</i><i>’</i></p>
<p><br/>

</p>
<p><b>Ojo</b>:
La m (mensajes) se usa para identificar el cambio/adición 
</p>


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




