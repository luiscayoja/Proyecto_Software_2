<?php
/* @var $this EmpleadooController */
/* @var $model Empleadoo */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Admisnistracion',
);

$this->menu=array(
	array('label'=>'Lista de Empleados', 'url'=>array('index')),
	array('label'=>'Crear Empleadoo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#empleadoo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administracion de Empleados</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'empleadoo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombres',
		'apellidos',
		'sexo',
		'telefono',
		'id_cargo',
		/*
		'id_area',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
