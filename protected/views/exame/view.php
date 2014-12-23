<?php
/* @var $this ExameController */
/* @var $model Exame */

$this->breadcrumbs=array(
	'Exames'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Exame', 'url'=>array('index')),
	array('label'=>'Create Exame', 'url'=>array('create')),
	array('label'=>'Update Exame', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Exame', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Exame', 'url'=>array('admin')),
);
?>

<h1>View Exame #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'url',
	),
)); ?>
