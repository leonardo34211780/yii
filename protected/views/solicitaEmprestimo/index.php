<?php
$this->breadcrumbs=array(
	'Emprestimo Solicitacaos',
);

$this->menu=array(
array('label'=>'Create EmprestimoSolicitacao','url'=>array('create')),
array('label'=>'Manage EmprestimoSolicitacao','url'=>array('admin')),
);
?>

<h1>Emprestimo Solicitacaos</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
