<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('reqEmprestimoId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->reqEmprestimoId),array('view','id'=>$data->reqEmprestimoId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fone')); ?>:</b>
	<?php echo CHtml::encode($data->fone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qtdPercelas')); ?>:</b>
	<?php echo CHtml::encode($data->qtdPercelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taxa')); ?>:</b>
	<?php echo CHtml::encode($data->taxa); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>