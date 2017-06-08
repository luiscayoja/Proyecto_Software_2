<?php
/* @var $this AsistenciaController */
/* @var $data Asistencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_i')); ?>:</b>
	<?php echo CHtml::encode($data->hora_i); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_s')); ?>:</b>
	<?php echo CHtml::encode($data->hora_s); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_emp')); ?>:</b>
	<?php echo CHtml::encode($data->id_emp); ?>
	<br />


</div>