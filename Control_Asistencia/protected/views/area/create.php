<?php
/* @var $this AreaController */
/* @var $model Area */

$this->breadcrumbs=array(
	'Areas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Area', 'url'=>array('index')),
	array('label'=>'Administracion de Area', 'url'=>array('admin')),
);
?>

<h1>Create Area</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>