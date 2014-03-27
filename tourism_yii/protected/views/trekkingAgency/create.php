<?php
/* @var $this TrekkingAgencyController */
/* @var $model TourismFirm */

$this->breadcrumbs=array(
	'Tourism Firms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TourismFirm', 'url'=>array('index')),
	array('label'=>'Manage TourismFirm', 'url'=>array('admin')),
);
?>

<h1>Create TourismFirm</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>