<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('taxa_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->taxa_id),array('view','id'=>$data->taxa_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_limite')); ?>:</b>
	<?php echo CHtml::encode($data->valor_limite); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taxa_mes')); ?>:</b>
	<?php echo CHtml::encode($data->taxa_mes); ?>
	<br />


</div>