<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Driver */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="driver-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->widget(
        DatePicker::classname(), 
        [
            'options' => [
                'value' => '1995-10-27',
            ],
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd'
            ]
        ]); 
    ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'vehicle_id')->dropDownList($vehicle->list)?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update') ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
