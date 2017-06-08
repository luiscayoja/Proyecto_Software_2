<?php
/* @var $this AsistenciaController */
/* @var $model Asistencia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asistencia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php date_default_timezone_set('America/La_Paz'); 
			$fecha = Date('d-m-Y');?>
		<?php echo $form->textField($model,'fecha',array('value'=>$fecha, 'readonly'=>'false')); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_i'); ?>
		<?php date_default_timezone_set('America/La_Paz'); 
			$fecha = Date('h:i:s');?>
		<?php echo $form->textField($model,'hora_i',array('value'=>$fecha)); ?>
		<?php echo $form->error($model,'hora_i'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_s'); ?>
		<?php date_default_timezone_set('America/La_Paz'); 
			$fecha = Date('h:i:s');?>
		<?php echo $form->textField($model,'hora_s',array('value'=>$fecha)); ?>
		<?php echo $form->error($model,'hora_s'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('size'=>60,'maxlength'=>255),array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_emp'); ?>
		<?php echo $form->dropDownList($model,'id_emp', Empleadoo::tolist(), array('empty'=>'Seleccione...')); ?>
		<?php echo $form->error($model,'id_emp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->