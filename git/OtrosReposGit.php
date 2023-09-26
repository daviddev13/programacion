<?php include('../includes/header.php'); ?>

<?php
if (isset($_GET['p'])) {
    $p = $_GET['p'];
    if ($p == 0) {
        printf('
        <h2 class="col-md-4 mx-auto">Adicionar Rama Remota a un Proyecto en pc (Repositorio Local)</h2>

        <div class="container" style="width: 46rem;">
        
        <table>
        <tr>
            <th>Comando</th>
            <th>Descripción</th>
        </tr>
        <tr>
            <td><code>git remote add NomRutaNew url</code></td>
            <td>Ruta nueva que permite traer datos o enlazar el proyecto con Git a una ruta url</td>
        </tr>
        <tr>
        </table>

        <p></p>
        
        </div>
		
        ');
    } elseif ($p == 1) {
        printf('
		<h2 class="col-md-4 mx-auto">(Push) Enviar Repositorio Local (proyecto en pc) a Repositorio Remoto</h2>

		<div class="container" style="width: 46rem;">

		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>git push NomRutaRemota NomRamaLocal</code></td>
				<td>Envia Repositorio Local a Remoto</td>
			</tr>
			<tr>
				<td><code>git push origin master</code></td>
				<td>subir modificaciones de git a github</td>
			</tr>
		</table>
		</div>

        <h3 class="col-md-4 mx-auto">Ejemplo de enviar APP en Git a Heroku</h3>

 		<div class="container" style="width: 46rem;">

		<p>Una vez se tiene la APP subida con Git, Git ya sabe el servidor Dónde se alojara pero
        hay que empujar la APP para que corra con Heroku a través del
        comando</p>

        <p><br/></p>
        <p><i>git push heroku master</i></p>
        <p><br/></p>
        <p><i><b>OJO:</b></i><i>
        Revisar que el despliegue quede bien hecho por la consola (deploy done)</i></p>
        </div>
     ');
    } elseif ($p == 2) {
        printf('
		<h2 class="col-md-4 mx-auto">(Fetch) Traer Repositorio Remoto a Repositorio Local (Github a Git)</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>git fetch</code></td>
				<td>Traer Repositorio Remoto (github) a Local (git)</td>
			</tr>
		</table>
		</div>
		<p>No realiza la fusion de los datos se puede revisar antes de fusionarlos con merge</p>
		');
    } elseif ($p == 3) {
        printf('
		<h2 class="col-md-4 mx-auto">(Pull) Traer Repositorio Remoto a Rama Local (fetch + fusion o Github a DD)</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>git pull NomRutaRemota NomRamaLocal</code></td>
				<td>Actualiza carpeta de proyecto con Github al Hacer Fetch+Merge juntos (github a DD)</td>
			</tr>
		</table>
		</div>

		<p>Nota: Para aceptar datos traidos de remoto en pc git commit -am "fusion"</p>
        ');
    } elseif ($p == 4) {
        printf('
		<h2 class="col-md-4 mx-auto">Clonar Repositorio desde Github</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>git clone URl</code></td>
				<td>URL se saca de github usand la HTTPS Copia datos de Master a DD y crea Repositorio Local</td>
			</tr>
		</table>
		</div>
        ');
    } elseif ($p == 5) {
        printf('
		<h2 class="col-md-4 mx-auto">Deployment (enviar archivos) a un servidor local</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>cd/var/www/Nomservidor</code></td>
				<td>abrir carpeta html del servidor local</td>
			</tr>
            <tr>
				<td><code>cat index.html</code></td>
				<td>probar funcionamiento del servidor por consola</td>
			</tr>
			<tr>
			    <td><code>git clone url</code></td>
			    <td>clonar repositorio en carpeta html</td>
		    </tr>
		    <tr>
			   <td><code>cd hyperblog</code></td>
			   <td>abrir carpeta clonada en consola</td>
		    </tr>
		    <tr>
		       <td><code>git status</code></td>
		       <td>revisar en que rama se encuentra para actualizar</td>
	        </tr>
	        <tr>
		       <td><code>git pull origin master </code></td>
		       <td>actualiza carpeta clonada en servidor</td>
	        </tr>
			<tr>
			   <td><code>cat index.html</code></td>
			   <td>se prueban actualizaciones en servidor</td>
		    </tr>
		</table>
		</div>
		<p>(ojo  proteger .git en el servidor)</p>
	
		<ol>
		   <li>travis-ci.org------------------web q da permisos git al servidor</li>
		   <li>jenkins------------------------app q da permisos git al servidor</li>
	    </ol>
        ');
    } elseif ($p == 6) {
        printf('
		<h2 class="col-md-4 mx-auto">Remover Ruta Remota del proyecto</h2>
		
		<div class="container" style="width: 46rem;">
		
        <table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>git remote rm NomRuta</code></td>
				<td>remover origen remoto del proyecto</td>
			</tr>
		</table>

		</div>
        ');
    } elseif ($p == 7) {
        printf('
		<h2 class="col-md-4 mx-auto">Especificar Hosting de APP en Git</h2>
		<div class="container" style="width: 46rem;">
		
		<p>Cuando se va a subir
		por primera vez una APP en Git hay que especificar el servidor Dónde
		se alojara antes de subirla o adicionar los archivos de la APP para
		ello se utiliza el comando:</p>
		<p><br/>
		
		</p>
		<p><i>git:
		remote  -a NomServidor</i></p>
		<p><br/>
		
		</p>
		<p style="line-height: 100%; margin-bottom: 0.42cm">Dónde:
		NomServidor= Nombre del servidor usado, el cual se obtiene o lo
		proporciona el Hosting contratado.</p>
		
		</div>
        ');
    } elseif ($p == 8) {
        printf('
		<h2 class="col-md-4 mx-auto">Listar carpetas subidas con Git</h2>
		<div class="container" style="width: 46rem;">
		
		<p>Al finalizar una modificación o cuando
		se quiera ver las carpetas están en el servidor se puede usar el
		comando:</p>
		<p><i>git remote -v</i></p>
		</div>
        ');
    } elseif ($p == 9) {
        printf('
		<h2 class="col-md-4 mx-auto">(Tags) Etiquetar Commits o hacer registros de referencia de cambios</h2>
		<div class="container" style="width: 46rem;">
		<table>
			<tr>
				<th>Comando</th>
				<th>Descripción</th>
			</tr>
			<tr>
				<td><code>git tag</code></td>
				<td>lista de tags o etiquetas</td>
			</tr>
            <tr>
				<td><code>git tag -l</code></td>
				<td>etiquetas ordenadas</td>
			</tr>
			<tr>
			    <td><code>git show-ref --tags</code></td>
			    <td>a que commit esta asignado el tag</td>
		    </tr>
		    <tr>
			   <td><code>git tag -a NomTag m "" serialCommit</code></td>
			   <td>crear un tag</td>
		    </tr>
		</table>
		</div>
		<table>
		<tr>
			<th>Comando</th>
			<th>Descripción</th>
		</tr>
		<tr>
			<td><code>git push origin TagName</code></td>
			<td>Subir etiqueta a Github</td>
		</tr>
		<tr>
			<td><code>git push origin --tags</code></td>
			<td>Subir varias etiquetas a Github (antes subir repositorio local)</td>
		</tr>
		<tr>
			<td><code>git tag -d NomTag</code></td>
			<td>Borra un tag volver a subir cambios repositorio y referencias de versiones</td>
		</tr>
		<tr>
		   <td><code>git push origin :refs/tags/NomTag</code></td>
		   <td>Borra tag en github</td>
		</tr>
	</table>
		<p>(ojo  proteger .git en el servidor)</p>
	
		<ol>
		   <li>travis-ci.org------------------web q da permisos git al servidor</li>
		   <li>jenkins------------------------app q da permisos git al servidor</li>
	    </ol>
		
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


