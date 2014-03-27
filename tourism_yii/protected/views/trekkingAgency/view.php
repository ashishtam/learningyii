<?php
/* @var $this TrekkingAgencyController */
/* @var $model TourismFirm */

$this->breadcrumbs=array(
	'Tourism Firms'=>array('index'),
	$model->TOURISM_FIRM_ID,
);

$this->menu=array(
	array('label'=>'List TourismFirm', 'url'=>array('index')),
	array('label'=>'Create TourismFirm', 'url'=>array('create')),
	array('label'=>'Update TourismFirm', 'url'=>array('update', 'id'=>$model->TOURISM_FIRM_ID)),
	array('label'=>'Delete TourismFirm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TOURISM_FIRM_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TourismFirm', 'url'=>array('admin')),
);
?>

<h1>View TourismFirm #<?php echo $model->TOURISM_FIRM_ID; ?></h1>

<?php 

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TOURISM_FIRM_ID',
		'FIRM_ID',
		'COM_NAME',
		'COM_ADDRESS',
		'COM_ADDRESS1',
		'COM_ADDRESS2',
		'PDISTRICT_ID',
		'COM_PO_BOX',
		'COM_PHONE',
		'COM_FAX',
		'COM_EMAIL',
		'COM_WEBSITE',
		'AUTHORISED_CAPITAL',
		'ISSUED_CAPITAL',
		'PAIDUP_CAPITAL',
		'FIXED_CAPITAL',
		'CURRENT_CAPITAL',
		'TOTAL_ROOM',
		'TOTAL_BED',
		'HTYPE_ID',
		'EMP_MALE',
		'EMP_FEMALE',
		'REG_DATE',
		'VAT_REGD_NO',
		'SHARE_CAPITAL',
		'BRANCH_NO',
		'INSIDE_NEPAL',
		'OUTSIDE_NEPAL',
		'PRO_OFFICER',
		'PRO_TRK_OFFICER',
		'PRO_ADMIN',
		'PRO_ACCOUNTANT',
		'PRO_OTHER',
		'REGISTERED',
		'IS_EXPIRED',
		'REG_NO',
		'ENTRY_DATE',
		'VALID_UPTO',
		'CREATED_BY',
		'CREATED_ON',
		'UPDATED_BY',
		'UPDATED_ON',
		'IP',
		'CATEGORY_ID',
	),
)); 

?>
