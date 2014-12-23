<?php
/* @var $this ExameController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Exames',
);

$this->menu=array(
	array('label'=>'Create Exame', 'url'=>array('create')),
	array('label'=>'Manage Exame', 'url'=>array('admin')),
);
?>

<h1>Exames</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
