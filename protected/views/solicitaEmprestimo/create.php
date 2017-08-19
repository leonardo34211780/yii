<?php
$this->breadcrumbs=array(
	'Emprestimo Solicitacaos'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List EmprestimoSolicitacao','url'=>array('index')),
array('label'=>'Manage EmprestimoSolicitacao','url'=>array('admin')),
);
?>

<h1>Create EmprestimoSolicitacao</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>