<?php
/* @var $this TbltestController */
/* @var $model Tbltest */

$this->breadcrumbs=array(
	'Tbltests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tbltest', 'url'=>array('index')),
	array('label'=>'Manage Tbltest', 'url'=>array('admin')),
);
?>

<h1>Create Tbltest</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>