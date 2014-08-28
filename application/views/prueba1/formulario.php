<?php
echo form_open('/controlador/recibirdatos');

$nombre=array(
	'name'=> 'nombre',
	'placeholder'=>'Escribe tu nombre'
	);

$videos=array(
	'name'=> 'videos',
	'placeholder'=>'Cantidad de Videos'
	);


?>

<?= form_label('Nombre:', 'nombre' ) //primer parametro la etiqueta segundo el nombre
?>  
<?= form_input($nombre) ?>
<br>


<?= form_label('Videos:', 'videos' ) ?>
<?= form_input($videos) ?>


<br>

<?= form_submit('','Subir Curso') ?>



<?= form_close() ?>

</body>
</html>