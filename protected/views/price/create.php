<?php
$this->breadcrumbs=array(
	'Prices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('translate', 'List Price'),'url'=>array('index')),
);
?>

<?php $this->pageTitlecrumbs = Yii::t('translate', 'Create Price');?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>