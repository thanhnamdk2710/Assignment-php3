<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Line */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form">

    <?php $form = ActiveForm::begin([
        'id' => $model->formName(),
        'enableAjaxValidation' => true, 
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>
        <?= $form->field($model, 'name')->textInput() ?>
        
        <?= $form->field($model, 'start_time_operation')->widget(
            TimePicker::classname(), 
            [
                'options' => [ 
                    'value' => '01:00 AM' 
                ]
            ]); 
        ?>

        <?= $form->field($model, 'end_time_operation')->widget(
            TimePicker::classname(), 
            [
                'options' => [ 
                    'value' => '01:00 AM' 
                ]
            ]); 
        ?>

        <?= $form->field($model, 'vehicle_type')->dropDownList($vehicle_type->list)?>

        <?= $form->field($model, 'file')->fileInput() ?>

        <div class="row buttons">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update') ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>
