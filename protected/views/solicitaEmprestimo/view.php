<?php
$this->breadcrumbs=array(
	'Emprestimo Solicitacaos'=>array('index'),
	$model->reqEmprestimoId,
);

$this->menu=array(
array('label'=>'List EmprestimoSolicitacao','url'=>array('index')),
array('label'=>'Create EmprestimoSolicitacao','url'=>array('create')),
array('label'=>'Update EmprestimoSolicitacao','url'=>array('update','id'=>$model->reqEmprestimoId)),
array('label'=>'Delete EmprestimoSolicitacao','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->reqEmprestimoId),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage EmprestimoSolicitacao','url'=>array('admin')),
);
?>

<h1>View EmprestimoSolicitacao #<?php echo $model->reqEmprestimoId; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'reqEmprestimoId',
		'email',
		'fone',
		'data',
		'valor',
		'qtdPercelas',
		'taxa',
		'status',
),
)); ?>
