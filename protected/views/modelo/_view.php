<?php
/* @var $this ModeloController */
/* @var $data Modelo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resumo')); ?>:</b>
	<?php echo CHtml::encode($data->resumo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_foto_modelo')); ?>:</b>
	<?php echo CHtml::encode($data->id_foto_modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_produto')); ?>:</b>
	<?php echo CHtml::encode($data->id_produto); ?>
	<br />


</div>