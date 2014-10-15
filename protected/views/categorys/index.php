<?php
/* @var $this CategorysController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categorys',
);

$this->menu=array(
	array('label'=>'Create Categorys', 'url'=>array('create')),
	array('label'=>'Manage Categorys', 'url'=>array('admin')),
);
?>

<h1>Categorys</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
