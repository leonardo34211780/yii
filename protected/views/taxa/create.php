<?php
$this->breadcrumbs=array(
	'Taxa Emprestimos'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List TaxaEmprestimo','url'=>array('index')),
array('label'=>'Manage TaxaEmprestimo','url'=>array('admin')),
);
?>

<h1>Create TaxaEmprestimo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>