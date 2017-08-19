<?php
$this->breadcrumbs=array(
	'Taxa Emprestimos'=>array('index'),
	$model->taxa_id,
);

$this->menu=array(
array('label'=>'List TaxaEmprestimo','url'=>array('index')),
array('label'=>'Create TaxaEmprestimo','url'=>array('create')),
array('label'=>'Update TaxaEmprestimo','url'=>array('update','id'=>$model->taxa_id)),
array('label'=>'Delete TaxaEmprestimo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->taxa_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage TaxaEmprestimo','url'=>array('admin')),
);
?>

<h1>View TaxaEmprestimo #<?php echo $model->taxa_id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'taxa_id',
		'valor_limite',
		'taxa_mes',
),
)); ?>
