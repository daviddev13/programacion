<?php include('../includes/header.php'); ?>

<?php
if (isset($_GET['parte'])) {
    $parte = $_GET['parte'];
    if ($parte == 0) {
        printf('
        <h2 class="col-md-4 mx-auto">Ver estado de archivos en Git</h2>
        <div class="container" style="width: 46rem;">
        
        <p>
        Para ver los cambios o estado de los archivos en un proyecto 
        con Git se utiliza el comando
        </p>
        
        <table>
        <tr>
            <th>Comando</th>
            <th>Descripción</th>
        </tr>
        <tr>
            <td><code>git status</code></td>
            <td> ver los cambios o estado de la bd</td>
        </tr>
        <tr>
        </table>

        <p>Por consola
        aparecerán en rojo los archivos a modificar.</p>
        <p><br/>
        
        </p>
        <p><b>OJO:</b> 
         Antes de adicionar cosas alistar
         los archivos ignorados y los listos a
        modificar, etc.</p>
        
        <p></p>
        
        </div>
		
        ');
    } elseif ($parte == 1) {
        printf('
		<h2 class="col-md-4 mx-auto">Ver Historia de Cambios Generalmente</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>show</code></td>
				<td>cambios historicos / sirve para ver rama actual</td>
			</tr>
			<tr>
				<td><code>reflog</code></td>
				<td>encontrar todos los registros modificaciones a la historia tambien</td>
			</tr>
			<tr>
				<td><code>log</code></td>
				<td>ver cambios en el proyecto</td>
			</tr>
            <tr>
                <td><code>log nombrearchivo.txt</code></td>
                <td>ver historia entera del archivo</td>
            </tr>
            <tr>
                <td><code>log --stat</code></td>
                <td>cambios especificos por bites en cada archivo</td>
            </tr>
            <tr>
                <td><code>log --all</code></td>
                <td>muestra todo el historial</td>
            </tr>
            <tr>
                <td><code>log --all --graph</code></td>
                <td>muestra todo graficamente</td>
            </tr>
            <tr>
                <td><code>log --all --graph --decorate</code></td>
                <td>muestra todo graficamente</td>
            </tr>
            <tr>
                <td><code>log --all --graph --decorate--oneline</code></td>
                <td>muestra todo comprimido</td>
            </tr>
            <tr>
                <td><code>log --oneline</code></td>
                <td>muestra id commit y título del commit.</td>
            </tr>
		</table>
		</div>
     ');
    } elseif ($parte == 2) {
        printf('
		<h2 class="col-md-4 mx-auto">Comparar Cambios</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>diff</code></td>
				<td>muestra cambios de staged vs disco duro</td>
			</tr>
			<tr>
				<td><code>diff</code></td>
				<td>serialcomit serialcomit  comparar cambios de dos commit</td>
			</tr>
		</table>
		</div>
        ');
    } elseif ($parte == 3) {
        printf('
		<h2 class="col-md-4 mx-auto">Buscar Palabras en Commits o en Archivos</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>git grep "palabra"</code></td>
				<td>busca archivos con palabra</td>
			</tr>
			<tr>
				<td><code>git grep -n "palabra"</code></td>
				<td>busca archivos y linea con palabra</td>
			</tr>
			<tr>
			    <td><code>git grep -c "palabra"</code></td>
			    <td>busca archivos y numero de veses palabra</td>
		    </tr>
            <tr>
			    <td><code>git log -s "palabra"</code></td>
			    <td> busca en commits palabra</td>
		    </tr>
		</table>
		</div>
        
        ');
    } elseif ($parte == 4) {
        printf('
		<h2 class="col-md-4 mx-auto">Ver Historia de Cambios x Persona</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>shortlog</code></td>
				<td>Log por persona de equipo</td>
			</tr>
			<tr>
				<td><code>shortlog -sn</code></td>
				<td># commits x cada persona</td>
			</tr>
            <tr>
				<td><code>shortlog -sn --all</code></td>
				<td># commits x cada persona sin eliminados</td>
			</tr>
			<tr>
				<td><code>shortlog -sn --all --no-merge</code></td>
				<td># commits x cada persona sin eliminados y merge</td>
			</tr>
		</table>
		</div>
        
        ');
    } elseif ($parte == 5) {
        printf('
		<h2 class="col-md-4 mx-auto">Ver Cambios x Persona en cada Archivo</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>blame NomArchivo</code></td>
				<td>que hizo cada persona línea x línea en el archivo</td>
			</tr>
            <tr>
				<td><code>blame -c NomArchivo </code></td>
				<td>que hizo cada persona línea x línea en el archivo ordenado</td>
			</tr>
            <tr>
				<td><code>blame NomArchivo -L#Inicial,#Final</code></td>
				<td>que hizo cada persona línea por línea, desde línea X hasta Y -LX,Y</td>
			</tr>
		</table>
		</div>
        
        ');
    } elseif ($parte == 6) {
        printf('
		<h2 class="col-md-4 mx-auto">Ver Cambios Modo Grafico (gitk)</h2>
		<div class="container" style="width: 46rem;">
		<p>Intalar gitk</p>
        <p>sudo apt-get update</p>
        <p>sudo apt-get install gitk</p>
        <table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>gitk</code></td>
				<td> ramas e historia de manera visual </td>
			</tr>
		</table>	                                
		</div>
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

<div class="col-md-4 mx-auto">
<a href="../git.php" class="btn btn-success" role="button" >Regresar a Menu Git</a>
</div>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>