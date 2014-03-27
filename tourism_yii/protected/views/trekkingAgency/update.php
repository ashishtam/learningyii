<?php
/* @var $this TrekkingAgencyController */
/* @var $model TourismFirm */

$this->breadcrumbs=array(
	'Tourism Firms'=>array('index'),
	$model->TOURISM_FIRM_ID=>array('view','id'=>$model->TOURISM_FIRM_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TourismFirm', 'url'=>array('index')),
	array('label'=>'Create TourismFirm', 'url'=>array('create')),
	array('label'=>'View TourismFirm', 'url'=>array('view', 'id'=>$model->TOURISM_FIRM_ID)),
	array('label'=>'Manage TourismFirm', 'url'=>array('admin')),
);
?>

<h1>Update TourismFirm <?php echo $model->TOURISM_FIRM_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>