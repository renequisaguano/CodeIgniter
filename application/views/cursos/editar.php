<?=form_open("/cursos/actualizar/$id") ?>


<?php 


$nombre=array(
	'name'=>'nombre',
	'placeholer'=> 'Escribe tu nombre',
	'value'=>$cursos->result()[0]->nombreCurso
	);

$videos=array(
	'name'=>'videos',
	'placeholer'=> 'Escribe la cantidad',
	'value'=>$cursos->result()[0]->videosCurso
	);

 ?>
Nombre:
<?= form_input($nombre)?>
<br>
Videos:
<?= form_input($videos)?>
<br>
<?= form_submit('','Actualizar')?>
<?form_close()?>

</body>
</html>