<?php
$this->breadcrumbs=array(
	'Emprestimo Solicitacaos'=>array('index'),
	$model->reqEmprestimoId=>array('view','id'=>$model->reqEmprestimoId),
	'Update',
);

	$this->menu=array(
	array('label'=>'List EmprestimoSolicitacao','url'=>array('index')),
	array('label'=>'Create EmprestimoSolicitacao','url'=>array('create')),
	array('label'=>'View EmprestimoSolicitacao','url'=>array('view','id'=>$model->reqEmprestimoId)),
	array('label'=>'Manage EmprestimoSolicitacao','url'=>array('admin')),
	);
	?>

	<h1>Update EmprestimoSolicitacao <?php echo $model->reqEmprestimoId; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>