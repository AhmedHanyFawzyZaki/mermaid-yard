<?php
$this->breadcrumbs=array(
	'Testimonials'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('translate', 'List Testimonial'),'url'=>array('index')),
	array('label'=>Yii::t('translate', 'Create Testimonial'),'url'=>array('create')),
	array('label'=>Yii::t('translate', 'View Testimonial'),'url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->pageTitlecrumbs = Yii::t('translate', 'Update Testimonial'). ' "'.$model->id.'"'; ?>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>