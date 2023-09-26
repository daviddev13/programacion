<div class="container">
  <div class="col-md-4 mx-auto" >
    <h2>Git</h2>
  </div>
    Programa para controlar y llevar historial de actualizaciones de los archivos (no binarios) de un software/carpeta 
    
    <h3>Definiciones para Git</h3>

<ul>
    <li><strong>Archivo Binario:</strong>Archivos que no son de texto plano se guardan en CND </li>
    <li><strong>Tracked:</strong> Archivo subido a Rama</li>
    <li><strong>Untracked:</strong>  Archivos en el disco duro no rastreado X git (Git no se entera cambios)</li>
    <li><strong>Unstaged:</strong> Archivos en el disco duro dentro de git</li>
    <li><strong>Staged:</strong> Archivos en git pero fuera de Master</li>
    <li><strong>DD:</strong> Disco Duro</li>
    <li><strong>URL:</strong> Dirección del repositorio</li>
    <li><strong>Head:</strong> Indicador de cuál versión de commit está viendo</li>
</ul>
  
  <ul class="nav flex-column">

    <div class="card-group">

      <div>
        <div class="card" style="width: 26rem;">
          <div class="card-body">
            <h2>Instalar e Iniciar Git</h2>
            <li class="nav-item"><a class="nav-link" href="git/iniciarGit.php?parte=0">Instalar Git</a></li>
            <li class="nav-item"><a class="nav-link" href="git/iniciarGit.php?parte=1">Ver version Instalada de Git</a></li>
            <li class="nav-item"><a class="nav-link" href="git/iniciarGit.php?parte=2">Iniciar Git en una APP</a></li>
            <li class="nav-item"><a class="nav-link" href="git/iniciarGit.php?parte=3">Configurar quien accede a Git</a></li>
            </div>
         </div>
      </div>
            
            <div>
        <div class="card" style="width: 26rem;">
          <div class="card-body">


            <h2>Trabajando Archivos en Git</h2>
            
            <h5>Archivos Untracked</h5>
            <li class="nav-item"><a class="nav-link" href="git/protegerarchivoenGit.php">Proteger/Ignorar archivos antes de subirlos a Git</a></li>
            <li class="nav-item"><a class="nav-link" href="git/archivosGit.php?parte=6">Agregar directo toda modificacion a repositorio Git (Saltar Stage=No alistar archivos)</a></li>
            <h5>Archivos Unstaged</h5>
            <li class="nav-item"><a class="nav-link" href="git/adicionararchivoconGit.php">Alistar archivos a subir con Git</a></li>
            <li class="nav-item"><a class="nav-link" href="git/archivosGit.php?parte=0">Almacenar archivos temporalmente antes de confirmar commit (Stash)</a></li>
            <h5>Archivos Staged</h5>
            <li class="nav-item"><a class="nav-link" href="git/archivosGit.php?parte=9">Subir archivos listos en Stage a Repositorio Git</a></li>
            <li class="nav-item"><a class="nav-link" href="git/archivosGit.php?parte=1">Sacar archivo modificado de stage</a></li>
            <h5>Archivos Tracked</h5>
            <li class="nav-item"><a class="nav-link" href="git/archivosGit.php?parte=2">Enmendar archivos subidos a Git</a></li>
            <h6>Eliminar</h6>
            <li class="nav-item"><a class="nav-link" href="git/archivosGit.php?parte=3">Eliminar archivos de Git (Conservardo Commits)</a></li>
            <li class="nav-item"><a class="nav-link" href="git/archivosGit.php?parte=4">Forzar borrado</a></li>
            <h6>Restaurar</h6>
            <li class="nav-item"><a class="nav-link" href="git/archivosGit.php?parte=5">Modificar archivo a como era antes</a></li>
            <li class="nav-item"><a class="nav-link" href="git/ramasGit.php?p=4">Restaurar/Traer Cambios Archivo Desde Otra Rama</a></li>
            <h6>Deshacer Cambios</h6>
            <li class="nav-item"><a class="nav-link" href="git/archivosGit.php?parte=7">Deshacer cambios/ borrar commits (cambia historia)</a></li>
            <li class="nav-item"><a class="nav-link" href="git/archivosGit.php?parte=8">Deshacer cambios y mantener archivos (sin afectar historia)</a></li>
            </div>
         </div>
      </div>
         <div>
          <div class="card" style="width: 26rem;">
          <div class="card-body">
            <h2>Buscar en Git o Ver Cambios</h2>
            <li class="nav-item"><a class="nav-link" href="git/buscarenGit.php?parte=0">Ver Estado de Archivos en Git</a></li>
            <li class="nav-item"><a class="nav-link" href="git/buscarenGit.php?parte=3">Buscar Palabras en Commits o en Archivos</a></li>                 
            <h5>Cambios</h5>
            <li class="nav-item"><a class="nav-link" href="git/buscarenGit.php?parte=1">Ver Historia de Cambios Generalmente</a></li>
            <li class="nav-item"><a class="nav-link" href="git/buscarenGit.php?parte=4">Ver Historia de Cambios x Persona</a></li>
            <li class="nav-item"><a class="nav-link" href="git/buscarenGit.php?parte=5">Ver Cambios x Persona en cada Archivo</a></li>  
            <li class="nav-item"><a class="nav-link" href="git/buscarenGit.php?parte=2">Comparar cambios</a></li>
            <li class="nav-item"><a class="nav-link" href="git/buscarenGit.php?parte=6">Ver Cambios Modo Grafico (gitk)</a></li>
              </div>
         </div>
      </div>
            <div>
          <div class="card" style="width: 26rem;">
          <div class="card-body">

            <h2>Ramas en Git (Branch)</h2>
            <li class="nav-item"><a class="nav-link" href="git/ramasGit.php?p=0">Crear Nueva Rama</a></li>
            <li class="nav-item"><a class="nav-link" href="git/ramasGit.php?p=1">Cambiar de Rama</a></li>
            <li class="nav-item"><a class="nav-link" href="git/ramasGit.php?p=2">Ver Ramas e Historial de cambios en Ramas</a></li>
            <li class="nav-item"><a class="nav-link" href="git/ramasGit.php?p=3">Eliminar Rama</a></li>
            <h5>Modificar Rama a partir de Otra</h5>
            
            <li class="nav-item"><a class="nav-link" href="git/ramasGit.php?p=5">(Cherry-pick) Corregir bugs rapido (reconstruyendo historia commits)</a></li>            
            <li class="nav-item"><a class="nav-link" href="git/ramasGit.php?p=6">(Merge) Unir Commits de 2 Ramas </a></li>
            <li class="nav-item"><a class="nav-link" href="git/ramasGit.php?p=7">(Rebase) Combinar/fusionar ramas se usa solo en Repositorios locales (cambia historia) </a></li>
          
            
         
         
         
          </div>
         </div>
      </div> 
            <div>
          <div class="card" style="width: 26rem;">
          <div class="card-body">
            <h2>Trabajando otros Repositorios Remotos/Locales</h2>
            <li class="nav-item"><a class="nav-link" href="git/OtrosReposGit.php?p=0">Adicionar Rama Remota a un Proyecto en pc (Repositorio Local)</a></li>
            <li class="nav-item"><a class="nav-link" href="git/OtrosReposGit.php?p=1">(Push) Enviar Repositorio Local (proyecto en pc) a Repositorio Remoto</a></li>
            <li class="nav-item"><a class="nav-link" href="git/OtrosReposGit.php?p=2">(Fetch) Traer Repositorio Remoto a Repositorio Local (Github a Git)</a></li>
            <li class="nav-item"><a class="nav-link" href="git/OtrosReposGit.php?p=3">(Pull) Traer y fusionar Repositorio Remoto a Rama Local (fetch + fusion o Github a DD)</a></li>
            <li class="nav-item"><a class="nav-link" href="git/OtrosReposGit.php?p=4">Clonar Repositorio desde Github</a></li>
            <li class="nav-item"><a class="nav-link" href="git/OtrosReposGit.php?p=5">Enviar archivos a servidor Local (Deployment)</a></li>
            <li class="nav-item"><a class="nav-link" href="git/OtrosReposGit.php?p=6">Remover Ruta Remota del proyecto</a></li>
            <li class="nav-item"><a class="nav-link" href="git/OtrosReposGit.php?p=7">Especificar  Servidor en linea a APP en Git</a></li>
            <li class="nav-item"><a class="nav-link" href="git/OtrosReposGit.php?p=8">Ver carpetas subidas con Git a servidor remoto</a></li> 
            <li class="nav-item"><a class="nav-link" href="git/OtrosReposGit.php?p=9">Tags o registros de referencia de cambios (etiquetas)</a></li>      
            </div>
         </div>
      </div> 
          

  </div>
</ul>
</div>
    
