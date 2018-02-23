<?php
$this->breadcrumbs=array(
	'Prices'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('translate', 'List Price'),'url'=>array('index')),
	array('label'=>Yii::t('translate', 'Create Price'),'url'=>array('create')),
	array('label'=>Yii::t('translate', 'View Price'),'url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->pageTitlecrumbs = Yii::t('translate', 'Update Price'). ' "'.$model->id.'"'; ?>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>