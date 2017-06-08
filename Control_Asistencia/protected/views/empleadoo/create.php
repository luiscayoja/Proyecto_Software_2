<?php
/* @var $this EmpleadooController */
/* @var $model Empleadoo */

$this->breadcrumbs=array(
	'Empleadoos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Empleadoo', 'url'=>array('index')),
	array('label'=>'Manage Empleadoo', 'url'=>array('admin')),
);
?>

<h1>Create Empleadoo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>