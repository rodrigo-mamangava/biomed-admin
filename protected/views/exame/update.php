<?php
/* @var $this ExameController */
/* @var $model Exame */

$this->breadcrumbs=array(
	'Exames'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Exame', 'url'=>array('index')),
	array('label'=>'Create Exame', 'url'=>array('create')),
	array('label'=>'View Exame', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Exame', 'url'=>array('admin')),
);
?>

<h1>Update Exame <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>