<?php
/* @var $this ProdutoController */
/* @var $model Produto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'produto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model, $modelPE); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo'); ?>
		<?php 
		
		if(!isset($listaExames)){
			$list = CHtml::listData(Tipo::model()->findAll(array('order' => 'nome')), 'id', 'nome');
			echo $form->dropDownList($model, 'id_tipo', $list, array(
					'prompt' => 'Selecione um tipo'
			)
			);
			
		}else{
			$list = CHtml::listData(Tipo::model()->findAll(array('order' => 'nome')), 'id', 'nome');
			echo $form->dropDownList($model, 'id_tipo', $list, array(
					'prompt' => 'Selecione um tipo'
				)
			);
			
		}
		?>		
		<?php echo $form->error($model,'id_tipo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($modelPE,'id_exame'); ?>
		<?php 
			$listExame = CHtml::listData(Exame::model()->findAll(array('order' => 'nome')), 'id', 'nome');
			echo $form->dropDownList(
					$modelPE, 
					'id_exame', 
					$listExame, 
					array(
						'multiple'=>true
			)
		);
			
			
			
		?>		
		<?php echo $form->error($model,'id_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resumo'); ?>
		<?php echo $form->textArea($model,'resumo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'resumo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textArea($model,'descricao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto_principal'); ?>
		<?php echo $form->textArea($model,'foto_principal',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'foto_principal'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->