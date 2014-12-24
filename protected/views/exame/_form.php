<?php
/* @var $this ExameController */
/* @var $model Exame */
/* @var $form CActiveForm */
?>

<?php 
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'exame-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>		
		<?php echo $form->textField($model,'url'); ?>
		<?php echo $form->error($model,'url'); ?>
		
	</div>
	
	<div class="row">
	<?php echo $form->labelEx($model,'url'); ?>	
	<?php 
	$this->widget('ext.niceditor.nicEditorWidget',array(
			"model"=>$model,                // Data-Model
			"attribute"=>'descricao',        // Attribute in the Data-Model
			"defaultValue"=>'Descrição da página',
			"config"=>array("maxHeight"=>"200px"),
			//"width"=>"400px",       // Optional default to 100%
			//"height"=>"200px",      // Optional default to 150px
	));
	?>
	<?php echo $form->error($model,'url'); ?>
	</div>


	


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->