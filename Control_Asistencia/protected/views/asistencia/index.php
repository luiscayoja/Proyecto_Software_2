<?php
/* @var $this AsistenciaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asistencias',
);

$this->menu=array(
	array('label'=>'Crear Asistencia', 'url'=>array('create')),
	array('label'=>'Administrador de Asistencia', 'url'=>array('admin')),
);
?>

<h1>Asistencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
