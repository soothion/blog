<div class="form">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm',
                               array(
        'id'                   => 'category-form',
        'enableAjaxValidation' => false,
        'htmlOptions'          => array('class' => 'well', 'enctype' => 'multipart/form-data'),
    ));

    ?>


        <?php echo $form->errorSummary($model); ?>

        <?php echo $form->textFieldRow($model, 'title',
                                         array('class' => 'span5', 'maxlength' => 50)); ?>

        <?php echo $form->textFieldRow($model, 'sort',
                                         array('class' => 'span5', 'maxlength' => 50)); ?>     

        <?php echo $form->checkBoxRow($model,'display',array(0,1)); ?>
                         

    <div class="row">
<?php
$this->widget('bootstrap.widgets.TbButton',
              array(
    'buttonType' => 'submit',
    'type'       => 'primary',
    'label'      => $model->isNewRecord ? 'Create' : 'Save',
));

?>
    </div>

<?php $this->endWidget(); ?>
</div>