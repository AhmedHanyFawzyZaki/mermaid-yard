<?php

$this->breadcrumbs = array(
    'Prices' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => Yii::t('translate', 'List Price'), 'url' => array('index')),
    array('label' => Yii::t('translate', 'Create Price'), 'url' => array('create')),
    array('label' => Yii::t('translate', 'Update Price'), 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('translate', 'Delete Price'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
);
?>

<?php $this->pageTitlecrumbs = Yii::t('translate', 'View Price') . ' "' . $model->id . '"'; ?>

<?php

$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'name',
        'price',
        'details' => array(
            'name' => 'details',
            'value' => $model->details,
            'type' => 'raw'
        ),
    ),
));
?>
