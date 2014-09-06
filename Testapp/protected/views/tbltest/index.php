<?php
/* @var $this TbltestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbltests',
);

$this->menu=array(
	array('label'=>'Create Tbltest', 'url'=>array('create')),
	array('label'=>'Manage Tbltest', 'url'=>array('admin')),
);
?>

<h1>Tbltests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
