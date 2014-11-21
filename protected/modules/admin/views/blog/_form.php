<div class="form">
    <?php
    $form     = $this->beginWidget('bootstrap.widgets.TbActiveForm',
                                   array(
        'id'                   => 'blog-form',
        'enableAjaxValidation' => false,
        'htmlOptions'          => array('class' => 'well', 'enctype' => 'multipart/form-data'),
    ));

    ?>

    <?php echo $form->errorSummary($model); ?>
    <?php
    $category = Category::model()->findAll();
    foreach ($category as $val)
    {
        $categorys[$val->id] = $val->title;
    }

    ?>
    <?php echo $form->dropDownList($model, 'cid', $categorys,
                                     array('class' => 'span5', 'maxlength' => 50)); ?>

    <?php echo $form->textFieldRow($model, 'alias',
                                     array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'title',
                                 array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'sort',
                                         array('class' => 'span5', 'maxlength' => 50)); ?>     

<?php echo $form->checkBoxRow($model,'recommend',array(0,1)); ?>


<?php echo $form->labelEx($model, 'thumb'); ?>
<?php echo $form->textField($model, 'thumb',
                                     array('class' => 'span5', 'maxlength' => 50)); ?>
    <input type="file" id="fileupload"/></br>
<?php if (!empty($model->thumb)) echo CHtml::image($model->thumb, null,
                                                            array('width' => '200px')) ?>
<?php echo $form->error($model, 'thumb'); ?>

    <script src="assets/js/jquery.ui.widget.js"></script>
    <script src="assets/js/jquery.fileupload.js"></script>
    <script>
        /*jslint unparam: true */
        /*global window, $ */
        $(function() {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = '<?php echo Yii::app()->createUrl('index/upload') ?>';
            $('#fileupload').fileupload({
                url: url,
                dataType: 'json',
                done: function(e, data) {
                    $.each(data.result.files, function(index, file) {
                        $("input[name='Blog[thumb]']").val(file.url);
                    });
                },
            }).prop('disabled', !$.support.fileInput)
                    .parent().addClass($.support.fileInput ? undefined : 'disabled');
        });
    </script>
<?php echo $form->textAreaRow($model, 'content',
                                array('rows' => 30, 'cols' => 80, 'class' => 'span10')); ?>

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