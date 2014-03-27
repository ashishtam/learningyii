<?php
/* @var $this TrekkingAgencyController */
/* @var $model TourismFirm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tourism-firm-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FIRM_ID'); ?>
		<?php echo $form->textField($model,'FIRM_ID'); ?>
		<?php echo $form->error($model,'FIRM_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COM_NAME'); ?>
		<?php echo $form->textField($model,'COM_NAME',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'COM_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COM_ADDRESS'); ?>
		<?php echo $form->textField($model,'COM_ADDRESS',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'COM_ADDRESS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COM_ADDRESS1'); ?>
		<?php echo $form->textField($model,'COM_ADDRESS1',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'COM_ADDRESS1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COM_ADDRESS2'); ?>
		<?php echo $form->textField($model,'COM_ADDRESS2',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'COM_ADDRESS2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PDISTRICT_ID'); ?>
		<?php echo $form->dropDownlist($model,'PDISTRICT_ID', array("Select District" => CHtml::listData(District::model()->findAll(array('order' => 'DISTRICT_ENG ASC')), 'DISTRICT_ID', 'DISTRICT_ENG'))); ?>
		<?php echo $form->error($model,'PDISTRICT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COM_PO_BOX'); ?>
		<?php echo $form->textField($model,'COM_PO_BOX'); ?>
		<?php echo $form->error($model,'COM_PO_BOX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COM_PHONE'); ?>
		<?php echo $form->textField($model,'COM_PHONE',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'COM_PHONE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COM_FAX'); ?>
		<?php echo $form->textField($model,'COM_FAX',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'COM_FAX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COM_EMAIL'); ?>
		<?php echo $form->textField($model,'COM_EMAIL',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'COM_EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COM_WEBSITE'); ?>
		<?php echo $form->textField($model,'COM_WEBSITE',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'COM_WEBSITE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AUTHORISED_CAPITAL'); ?>
		<?php echo $form->textField($model,'AUTHORISED_CAPITAL'); ?>
		<?php echo $form->error($model,'AUTHORISED_CAPITAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ISSUED_CAPITAL'); ?>
		<?php echo $form->textField($model,'ISSUED_CAPITAL'); ?>
		<?php echo $form->error($model,'ISSUED_CAPITAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAIDUP_CAPITAL'); ?>
		<?php echo $form->textField($model,'PAIDUP_CAPITAL'); ?>
		<?php echo $form->error($model,'PAIDUP_CAPITAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FIXED_CAPITAL'); ?>
		<?php echo $form->textField($model,'FIXED_CAPITAL'); ?>
		<?php echo $form->error($model,'FIXED_CAPITAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CURRENT_CAPITAL'); ?>
		<?php echo $form->textField($model,'CURRENT_CAPITAL'); ?>
		<?php echo $form->error($model,'CURRENT_CAPITAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TOTAL_ROOM'); ?>
		<?php echo $form->textField($model,'TOTAL_ROOM'); ?>
		<?php echo $form->error($model,'TOTAL_ROOM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TOTAL_BED'); ?>
		<?php echo $form->textField($model,'TOTAL_BED'); ?>
		<?php echo $form->error($model,'TOTAL_BED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HTYPE_ID'); ?>
		<?php echo $form->textArea($model,'HTYPE_ID',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'HTYPE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_MALE'); ?>
		<?php echo $form->textField($model,'EMP_MALE'); ?>
		<?php echo $form->error($model,'EMP_MALE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_FEMALE'); ?>
		<?php echo $form->textField($model,'EMP_FEMALE'); ?>
		<?php echo $form->error($model,'EMP_FEMALE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REG_DATE'); ?>
		<?php echo $form->textArea($model,'REG_DATE',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'REG_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VAT_REGD_NO'); ?>
		<?php echo $form->textArea($model,'VAT_REGD_NO',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'VAT_REGD_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SHARE_CAPITAL'); ?>
		<?php echo $form->textField($model,'SHARE_CAPITAL'); ?>
		<?php echo $form->error($model,'SHARE_CAPITAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BRANCH_NO'); ?>
		<?php echo $form->textField($model,'BRANCH_NO'); ?>
		<?php echo $form->error($model,'BRANCH_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INSIDE_NEPAL'); ?>
		<?php echo $form->textField($model,'INSIDE_NEPAL'); ?>
		<?php echo $form->error($model,'INSIDE_NEPAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OUTSIDE_NEPAL'); ?>
		<?php echo $form->textField($model,'OUTSIDE_NEPAL'); ?>
		<?php echo $form->error($model,'OUTSIDE_NEPAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PRO_OFFICER'); ?>
		<?php echo $form->textField($model,'PRO_OFFICER'); ?>
		<?php echo $form->error($model,'PRO_OFFICER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PRO_TRK_OFFICER'); ?>
		<?php echo $form->textField($model,'PRO_TRK_OFFICER'); ?>
		<?php echo $form->error($model,'PRO_TRK_OFFICER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PRO_ADMIN'); ?>
		<?php echo $form->textField($model,'PRO_ADMIN'); ?>
		<?php echo $form->error($model,'PRO_ADMIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PRO_ACCOUNTANT'); ?>
		<?php echo $form->textField($model,'PRO_ACCOUNTANT'); ?>
		<?php echo $form->error($model,'PRO_ACCOUNTANT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PRO_OTHER'); ?>
		<?php echo $form->textField($model,'PRO_OTHER'); ?>
		<?php echo $form->error($model,'PRO_OTHER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REGISTERED'); ?>
		<?php echo $form->textField($model,'REGISTERED'); ?>
		<?php echo $form->error($model,'REGISTERED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IS_EXPIRED'); ?>
		<?php echo $form->textField($model,'IS_EXPIRED'); ?>
		<?php echo $form->error($model,'IS_EXPIRED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REG_NO'); ?>
		<?php echo $form->textField($model,'REG_NO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'REG_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ENTRY_DATE'); ?>
                <?php // echo $form->textField($model,'ENTRY_DATE'); ?>
		<?php echo $form->error($model,'ENTRY_DATE'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                'name'=>'TourismFirm[ENTRY_DATE]',
                                'id'=>'TourismFirm_ENTRY_DATE',
                            'value'=>Yii::app()->dateFormatter->format("y-M-d",strtotime($model->ENTRY_DATE)),
                                'options'=>array(
                                    'showAnim'=>'fold',
                                    'changeMonth' => true,
                                    'changeYear' => true,
                                ),
                               
                        )); 
            ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VALID_UPTO'); ?>
                <?php
                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                        'name'=>'TourismFirm[VALID_UPTO]',
                                        'id'=>'TourismFirm_VALID_UPTO',
                                        'options'=>array(
                                            'showAnim'=>'fold',
                                            'changeMonth' => true,
                                            'changeYear' => true,
                                        ),

                                )); 
                    ?>
		<?php echo $form->error($model,'VALID_UPTO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->