<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'testimonial-form',
    'enableAjaxValidation' => false,
    'type' => 'horizontal',
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
?>

        <!--<p class="help-block">Fields with <span class="required">*</span> are required.</p>-->

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'name', array('class' => 'span9')); ?>

<?php echo $form->textFieldRow($model, 'title', array('class' => 'span9')); ?>

<?php echo $form->textAreaRow($model, 'content', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

<?php
echo '<div class="control-group">';

echo $form->labelEx($model, 'rating', array('class' => 'control-label'));

echo '<div class="controls">';
$this->widget('ext.DzRaty.DzRaty', array(
    'model' => $model,
    'attribute' => 'rating',
));
echo '</div></div>';
?>

<?php
echo '<div class="control-group">';

echo $form->labelEx($model, 'image', array('class' => 'control-label'));

echo '<div class="controls">';

echo $form->fileField($model, 'image', array('class' => 'span8', 'maxlength' => 255));

if (!$model->isNewRecord) {

    $this->widget('ext.SAImageDisplayer', array(
        'image' => $model->image,
        'title' => '',
        'alt' => '',
        'defaultImage' => '',
        'class' => 'pull-right',
        'group' => 'testimonials',
        'size' => 'small',
    ));
}

echo '</div></div>';
?>

<div class="form-actions clear">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
