
<table border="1">
<tr>
	<td>Nombre</td>
	<td>Numero de Videos</td>


</tr>
<?php 

	foreach ($cursos->result() as $c ) {
 ?>

<tr>
	<td><center><?php echo $c->nombreCurso ?> </center> </td>
	<td><center> <?php echo $c->videosCurso ?></center> </td>


</tr>


 <?php  
	}
?>

</table>



</body>
</html>