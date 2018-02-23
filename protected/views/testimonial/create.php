<?php
$this->breadcrumbs=array(
	'Testimonials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('translate', 'List Testimonial'),'url'=>array('index')),
);
?>

<?php $this->pageTitlecrumbs = Yii::t('translate', 'Create Testimonial');?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>