<?php
$this->breadcrumbs=array(
	'Taxa Emprestimos'=>array('index'),
	$model->taxa_id=>array('view','id'=>$model->taxa_id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List TaxaEmprestimo','url'=>array('index')),
	array('label'=>'Create TaxaEmprestimo','url'=>array('create')),
	array('label'=>'View TaxaEmprestimo','url'=>array('view','id'=>$model->taxa_id)),
	array('label'=>'Manage TaxaEmprestimo','url'=>array('admin')),
	);
	?>

	<h1>Update TaxaEmprestimo <?php echo $model->taxa_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>