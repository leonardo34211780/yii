<?php
$this->breadcrumbs=array(
	'Taxa Emprestimos',
);

$this->menu=array(
array('label'=>'Create TaxaEmprestimo','url'=>array('create')),
array('label'=>'Manage TaxaEmprestimo','url'=>array('admin')),
);
?>

<h1>Taxa Emprestimos</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
