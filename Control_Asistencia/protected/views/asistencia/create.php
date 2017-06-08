<?php
/* @var $this AsistenciaController */
/* @var $model Asistencia */

$this->breadcrumbs=array(
	'Asistencias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Asistencia', 'url'=>array('index')),
	array('label'=>'Administrador de Asistencia', 'url'=>array('admin')),
);
?>

<h1>Crear Asistencia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>