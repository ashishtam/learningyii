<?php
/* @var $this TrekkingAgencyController */
/* @var $model TourismFirm */

$this->breadcrumbs=array(
	'Tourism Firms'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TourismFirm', 'url'=>array('index')),
	array('label'=>'Create TourismFirm', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tourism-firm-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tourism Firms</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tourism-firm-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'TOURISM_FIRM_ID',
		'FIRM_ID',
		'COM_NAME',
		'COM_ADDRESS',
		'COM_ADDRESS1',
		'COM_ADDRESS2',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
