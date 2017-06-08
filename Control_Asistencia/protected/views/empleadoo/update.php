<?php
/* @var $this EmpleadooController */
/* @var $model Empleadoo */

$this->breadcrumbs=array(
	'Empleadoos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Empleadoo', 'url'=>array('index')),
	array('label'=>'Create Empleadoo', 'url'=>array('create')),
	array('label'=>'View Empleadoo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Empleadoo', 'url'=>array('admin')),
);
?>

<h1>Update Empleadoo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>