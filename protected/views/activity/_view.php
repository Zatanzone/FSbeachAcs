<?php
/* @var $this ActivityController */
/* @var $data Activity */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numofplayer')); ?>:</b>
	<?php echo CHtml::encode($data->numofplayer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('promotion_id')); ?>:</b>
	<?php echo CHtml::encode($data->promotion_id); ?>
	<br />


</div>