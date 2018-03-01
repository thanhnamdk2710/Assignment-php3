<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Station */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form">

    <?php $form = ActiveForm::begin([
        'id' => $model->formName(),
        'enableAjaxValidation' => true, 
    ]); ?>

        <?= $form->field($model, 'name')->textInput() ?>

        <?= $form->field($model, 'position_station')->dropdownList([
            1 => 'Start',
            2 => 'Inter',
            3 => 'End',
        ]) ?>

        <?= $form->field($model, 'line_id')->dropDownList($line->list) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update') ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>
