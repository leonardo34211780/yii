<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('customerNumber')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->customerNumber),array('view','id'=>$data->customerNumber)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customerName')); ?>:</b>
	<?php echo CHtml::encode($data->customerName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactLastName')); ?>:</b>
	<?php echo CHtml::encode($data->contactLastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactFirstName')); ?>:</b>
	<?php echo CHtml::encode($data->contactFirstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addressLine1')); ?>:</b>
	<?php echo CHtml::encode($data->addressLine1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addressLine2')); ?>:</b>
	<?php echo CHtml::encode($data->addressLine2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postalCode')); ?>:</b>
	<?php echo CHtml::encode($data->postalCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salesRepEmployeeNumber')); ?>:</b>
	<?php echo CHtml::encode($data->salesRepEmployeeNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creditLimit')); ?>:</b>
	<?php echo CHtml::encode($data->creditLimit); ?>
	<br />

	*/ ?>

</div>