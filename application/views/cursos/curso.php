
<?php 

if($cursos){

	?>


<table border="1">
<tr>
	<td>Nombre</td>
	<td>Numero de Videos</td>
</tr>

<?php

	foreach ($cursos->result() as $c ) {
 ?>

<tr>

	<td><center> <a href="cursos/index/<?= $c->idCurso ?>"> <?php echo $c->nombreCurso ?>  </a> </center> </td>
	<td><center> <?php echo $c->videosCurso ?></center> </td>


</tr>


 <?php  
	}
}else{
	echo "ERROR EN LA APLICACION";
}

?>

</table>



</body>
</html>