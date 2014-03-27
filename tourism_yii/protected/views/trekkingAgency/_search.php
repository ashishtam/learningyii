<?php
/* @var $this TrekkingAgencyController */
/* @var $model TourismFirm */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'TOURISM_FIRM_ID'); ?>
		<?php echo $form->textField($model,'TOURISM_FIRM_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FIRM_ID'); ?>
		<?php echo $form->textField($model,'FIRM_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_NAME'); ?>
		<?php echo $form->textField($model,'COM_NAME',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_ADDRESS'); ?>
		<?php echo $form->textField($model,'COM_ADDRESS',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_ADDRESS1'); ?>
		<?php echo $form->textField($model,'COM_ADDRESS1',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_ADDRESS2'); ?>
		<?php echo $form->textField($model,'COM_ADDRESS2',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PDISTRICT_ID'); ?>
		<?php echo $form->textField($model,'PDISTRICT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_PO_BOX'); ?>
		<?php echo $form->textField($model,'COM_PO_BOX'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_PHONE'); ?>
		<?php echo $form->textField($model,'COM_PHONE',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_FAX'); ?>
		<?php echo $form->textField($model,'COM_FAX',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_EMAIL'); ?>
		<?php echo $form->textField($model,'COM_EMAIL',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_WEBSITE'); ?>
		<?php echo $form->textField($model,'COM_WEBSITE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AUTHORISED_CAPITAL'); ?>
		<?php echo $form->textField($model,'AUTHORISED_CAPITAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ISSUED_CAPITAL'); ?>
		<?php echo $form->textField($model,'ISSUED_CAPITAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAIDUP_CAPITAL'); ?>
		<?php echo $form->textField($model,'PAIDUP_CAPITAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FIXED_CAPITAL'); ?>
		<?php echo $form->textField($model,'FIXED_CAPITAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CURRENT_CAPITAL'); ?>
		<?php echo $form->textField($model,'CURRENT_CAPITAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TOTAL_ROOM'); ?>
		<?php echo $form->textField($model,'TOTAL_ROOM'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TOTAL_BED'); ?>
		<?php echo $form->textField($model,'TOTAL_BED'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HTYPE_ID'); ?>
		<?php echo $form->textArea($model,'HTYPE_ID',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_MALE'); ?>
		<?php echo $form->textField($model,'EMP_MALE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_FEMALE'); ?>
		<?php echo $form->textField($model,'EMP_FEMALE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REG_DATE'); ?>
		<?php echo $form->textArea($model,'REG_DATE',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VAT_REGD_NO'); ?>
		<?php echo $form->textArea($model,'VAT_REGD_NO',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SHARE_CAPITAL'); ?>
		<?php echo $form->textField($model,'SHARE_CAPITAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BRANCH_NO'); ?>
		<?php echo $form->textField($model,'BRANCH_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INSIDE_NEPAL'); ?>
		<?php echo $form->textField($model,'INSIDE_NEPAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OUTSIDE_NEPAL'); ?>
		<?php echo $form->textField($model,'OUTSIDE_NEPAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRO_OFFICER'); ?>
		<?php echo $form->textField($model,'PRO_OFFICER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRO_TRK_OFFICER'); ?>
		<?php echo $form->textField($model,'PRO_TRK_OFFICER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRO_ADMIN'); ?>
		<?php echo $form->textField($model,'PRO_ADMIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRO_ACCOUNTANT'); ?>
		<?php echo $form->textField($model,'PRO_ACCOUNTANT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRO_OTHER'); ?>
		<?php echo $form->textField($model,'PRO_OTHER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REGISTERED'); ?>
		<?php echo $form->textField($model,'REGISTERED'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_EXPIRED'); ?>
		<?php echo $form->textField($model,'IS_EXPIRED'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REG_NO'); ?>
		<?php echo $form->textField($model,'REG_NO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ENTRY_DATE'); ?>
		<?php echo $form->textField($model,'ENTRY_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VALID_UPTO'); ?>
		<?php echo $form->textField($model,'VALID_UPTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATED_BY'); ?>
		<?php echo $form->textField($model,'CREATED_BY'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATED_ON'); ?>
		<?php echo $form->textField($model,'CREATED_ON'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UPDATED_BY'); ?>
		<?php echo $form->textField($model,'UPDATED_BY'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UPDATED_ON'); ?>
		<?php echo $form->textField($model,'UPDATED_ON'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IP'); ?>
		<?php echo $form->textField($model,'IP',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CATEGORY_ID'); ?>
		<?php echo $form->textField($model,'CATEGORY_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->