<?php
/* @var $this ExameController */
/* @var $model Exame */

$this->breadcrumbs=array(
	'Exames'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Exame', 'url'=>array('index')),
	array('label'=>'Manage Exame', 'url'=>array('admin')),
);
?>

<h1>Create Exame</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>