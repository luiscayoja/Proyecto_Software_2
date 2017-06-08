<?php
/* @var $this EmpleadooController */
/* @var $model Empleadoo */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Empleadoo', 'url'=>array('index')),
	array('label'=>'Create Empleadoo', 'url'=>array('create')),
	array('label'=>'Update Empleadoo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Empleadoo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Empleadoo', 'url'=>array('admin')),
);
?>

<h1>View Empleados #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombres',
		'apellidos',
		'sexo',
		'telefono',
		'id_cargo',
		'id_area',
	),
)); ?>
