<?php
/* @var $this TrekkingAgencyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tourism Firms',
);

$this->menu=array(
	array('label'=>'Create TourismFirm', 'url'=>array('create')),
	array('label'=>'Manage TourismFirm', 'url'=>array('admin')),
);
?>

<h1>Tourism Firms</h1>

<?php 
//$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//));

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=> $dataProvider,
    'columns' => array(
                'TOURISM_FIRM_ID',
		'COM_NAME',
		'COM_ADDRESS',
		'PDISTRICT_ID',
		'COM_EMAIL',
		'COM_WEBSITE',
		'REG_DATE',
		'REG_NO',
		'ENTRY_DATE',
		'VALID_UPTO',
		'CREATED_BY',
		'CREATED_ON',
		'UPDATED_BY',
		'UPDATED_ON',
    ),
));
?>
