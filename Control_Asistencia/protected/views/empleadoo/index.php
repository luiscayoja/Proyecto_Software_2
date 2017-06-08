<?php
/* @var $this EmpleadooController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Empleados',
);

$this->menu=array(
	array('label'=>'Crear Empleados', 'url'=>array('create')),
	array('label'=>'Administrar Empleados', 'url'=>array('admin')),
);
?>

<h1>Empleados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
