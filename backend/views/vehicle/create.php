<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Vehicle */

$this->title = 'Create Vehicle';
$this->params['breadcrumbs'][] = ['label' => 'Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breadcrumbs">
    <?= Html::a('Home', ['site/index']) ?>
    &raquo;
    <?= Html::a('Vehicle', ['vehicle/index']) ?>
    &raquo; 
    <span>Create</span>
</div><!-- breadcrumbs -->
<div class="span-19">
    <div id="content">
        <h1>Create Vehicle</h1>

        <?= $this->render('_form', [
            'model' => $model,
            'vehicle_type' => $vehicle_type
        ]) ?>
        
    </div><!-- content -->
</div>
<div class="span-5 last">
    <div id="sidebar">
        <div class="portlet" >
            <div class="portlet-decoration">
                <div class="portlet-title">Operations</div>
            </div>
            <div class="portlet-content">
                <ul class="operations" >
                    <li><?= Html::a('List Vehicle', ['vehicle/index']) ?></li>
                    <li><?= Html::a('Create Vehicle', ['vehicle/create']) ?></li>
                </ul>
            </div>
        </div>	
    </div><!-- sidebar -->
</div>

