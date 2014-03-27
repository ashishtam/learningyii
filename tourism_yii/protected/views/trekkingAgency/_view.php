<?php
/* @var $this TrekkingAgencyController */
/* @var $data TourismFirm */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TOURISM_FIRM_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TOURISM_FIRM_ID), array('view', 'id'=>$data->TOURISM_FIRM_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIRM_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FIRM_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->COM_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_ADDRESS')); ?>:</b>
	<?php echo CHtml::encode($data->COM_ADDRESS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_ADDRESS1')); ?>:</b>
	<?php echo CHtml::encode($data->COM_ADDRESS1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_ADDRESS2')); ?>:</b>
	<?php echo CHtml::encode($data->COM_ADDRESS2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PDISTRICT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PDISTRICT_ID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_PO_BOX')); ?>:</b>
	<?php echo CHtml::encode($data->COM_PO_BOX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_PHONE')); ?>:</b>
	<?php echo CHtml::encode($data->COM_PHONE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_FAX')); ?>:</b>
	<?php echo CHtml::encode($data->COM_FAX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->COM_EMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_WEBSITE')); ?>:</b>
	<?php echo CHtml::encode($data->COM_WEBSITE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AUTHORISED_CAPITAL')); ?>:</b>
	<?php echo CHtml::encode($data->AUTHORISED_CAPITAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ISSUED_CAPITAL')); ?>:</b>
	<?php echo CHtml::encode($data->ISSUED_CAPITAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAIDUP_CAPITAL')); ?>:</b>
	<?php echo CHtml::encode($data->PAIDUP_CAPITAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIXED_CAPITAL')); ?>:</b>
	<?php echo CHtml::encode($data->FIXED_CAPITAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CURRENT_CAPITAL')); ?>:</b>
	<?php echo CHtml::encode($data->CURRENT_CAPITAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TOTAL_ROOM')); ?>:</b>
	<?php echo CHtml::encode($data->TOTAL_ROOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TOTAL_BED')); ?>:</b>
	<?php echo CHtml::encode($data->TOTAL_BED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HTYPE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->HTYPE_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_MALE')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_MALE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_FEMALE')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_FEMALE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REG_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->REG_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VAT_REGD_NO')); ?>:</b>
	<?php echo CHtml::encode($data->VAT_REGD_NO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SHARE_CAPITAL')); ?>:</b>
	<?php echo CHtml::encode($data->SHARE_CAPITAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BRANCH_NO')); ?>:</b>
	<?php echo CHtml::encode($data->BRANCH_NO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INSIDE_NEPAL')); ?>:</b>
	<?php echo CHtml::encode($data->INSIDE_NEPAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OUTSIDE_NEPAL')); ?>:</b>
	<?php echo CHtml::encode($data->OUTSIDE_NEPAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_OFFICER')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_OFFICER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_TRK_OFFICER')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_TRK_OFFICER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_ADMIN')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_ADMIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_ACCOUNTANT')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_ACCOUNTANT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_OTHER')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_OTHER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REGISTERED')); ?>:</b>
	<?php echo CHtml::encode($data->REGISTERED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IS_EXPIRED')); ?>:</b>
	<?php echo CHtml::encode($data->IS_EXPIRED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REG_NO')); ?>:</b>
	<?php echo CHtml::encode($data->REG_NO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ENTRY_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->ENTRY_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VALID_UPTO')); ?>:</b>
	<?php echo CHtml::encode($data->VALID_UPTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_BY')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_BY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_ON')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_ON); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UPDATED_BY')); ?>:</b>
	<?php echo CHtml::encode($data->UPDATED_BY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UPDATED_ON')); ?>:</b>
	<?php echo CHtml::encode($data->UPDATED_ON); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IP')); ?>:</b>
	<?php echo CHtml::encode($data->IP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CATEGORY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CATEGORY_ID); ?>
	<br />

	*/ ?>

</div>