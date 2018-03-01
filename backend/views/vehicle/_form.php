<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\VehicleType;
use backend\models\Line;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Vehicle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-form">

    <?php $form = ActiveForm::begin([
        'id' => $model->formName(),
        'enableAjaxValidation' => true,
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capacity')->textInput() ?>

    <?= $form->field($model, 'vehicle_type')->dropDownList(
        ArrayHelper::map(VehicleType::find()->all(), 'id', 'name'),
        [
            'onchange' => '
                $.post("index.php?r=line/list&id='.'"+$(this).val(), function(data){
                    $("select#vehicle-line_id").html(data);
                });
            '
        ]
    ) ?>

    <?= $form->field($model, 'line_id')->dropDownList(
        ArrayHelper::map(Line::find()->all(), 'id', 'name')) 
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update') ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
