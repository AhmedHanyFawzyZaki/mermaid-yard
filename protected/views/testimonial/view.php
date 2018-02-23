<?php

$this->breadcrumbs = array(
    'Testimonials' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => Yii::t('translate', 'List Testimonial'), 'url' => array('index')),
    array('label' => Yii::t('translate', 'Create Testimonial'), 'url' => array('create')),
    array('label' => Yii::t('translate', 'Update Testimonial'), 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('translate', 'Delete Testimonial'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
);
?>

<?php $this->pageTitlecrumbs = Yii::t('translate', 'View Testimonial') . ' "' . $model->id . '"'; ?>

<?php

$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'name',
        'title',
        'content',
        //'rating',
        'image' => array(
            'name' => 'image',
            'value' => Helper::showImage($model->image, '', '', 'testimonials', 'small', ''),
            'type' => 'raw'
        ),
    ),
));
?>
