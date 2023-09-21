<?php include('../includes/header.php'); ?>
<h2 class="col-md-4 mx-auto">Exportar/Importar códigos en APP React</h2>

<div class="container" style="width: 46rem;">
   
   <p>Una de las ventajas de React es que permite pasar partes de códigos a
      otros archivos como elementos y obtener así más atributos, para
      hacerlo se debe:</p>
   <p></p>
   
   <h3>Preparar el codigo React</h3>
   <ol>
	  <li><p>Crear un nuevo archivo .js para definir en una <a href="https://devcodigo.online/react/funcionestiporeact.php">función</a>/<a href="https://devcodigo.online/react/clasestiporeact.php">clase</a>
	  el código que se desea exportar.
	  </p>
	  <p>OJO: tener en cuenta importar los modulos/librerias necesarios en la clase/funcion definida (ver <a href="https://devcodigo.online/react/esqueletocodigoreact.php">esqueleto codigo react</a>)<p>  
      <p></p>
   </ol>
   <ol start="2">
	   <li><p style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Exportar
	   el código con la siguiente línea al final:</font></p>
       <p></p>
       <p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><i>export
       default NombreaExportar;</i></font></p>
       <p></p>
       <p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Dónde:</font></p>
       <ul>
	       <li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">NombreaExportar=
	       Nombre de la función o Clase que se colocó al código a exportar
	       al definirlo en una función o clase.</font></p>
       </ul>
       <p></p>
   </ol>

   <h3>Llamar el codigo React en otro archivo</h3>
   <ol start="3">
	    <li><p style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Importar
	    el código en el nuevo archivo dónde se necesita con la siguiente
	    línea al inicio del código:</font></p>
        <p></p>
         <p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000"><i>import
         NomImportado from ‘/NomArchivo’;</i></font></p>
	     <p></p>
         <p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">Dónde:</font></p>
         <ul>
	     <li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">NomImportado=NombreaExportar=Nombre
	       de la función o clase que se exporta</font></p>
	     <li><p align="left" style="line-height: 100%; margin-bottom: 0cm"><font color="#000000">NomArchivo=Nombre
	     del archivo que se le da al archivo.js Dónde se define el código a
	     exportar.</font></p>
         </ul>
         <p></p>
   </ol>
	     
   <h3>Usar el codigo React en el archivo que se importa</h3>
   <ol start="4">
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm">Así
	ya se puede usar la <a href="https://devcodigo.online/react/funcionestiporeact.php">función</a>/<a href="https://devcodigo.online/react/clasestiporeact.php">clase</a> definida en el nuevo archivo
	como un componente<a href="https://devcodigo.online/react/componentetiporeact.php"> (ver componentes tipo React)</a></p>
    <p></p>
   </ol>
   <ol start="5">
	<li><p align="left" style="line-height: 100%; margin-bottom: 0cm">También
	se pueden citar los atributos del código exportado como propiedades
	en el código que se importó <a href="https://devcodigo.online/react.php"> (ver propiedades en React).</a></p>
    </p>
   </ol>

</div>
<div class="col-md-4 mx-auto">
  <a href="../react.php" class="btn btn-success" role="button" >Regresar a Menu React</a>
</div>
<p></p>
<?php include('../inform.php'); ?>
<?php include('../includes/footer.php'); ?>