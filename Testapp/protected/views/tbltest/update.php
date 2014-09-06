<?php
/* @var $this TbltestController */
/* @var $model Tbltest */

$this->breadcrumbs=array(
	'Tbltests'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tbltest', 'url'=>array('index')),
	array('label'=>'Create Tbltest', 'url'=>array('create')),
	array('label'=>'View Tbltest', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Tbltest', 'url'=>array('admin')),
);
?>

<h1>Update Tbltest <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>