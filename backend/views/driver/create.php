<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Driver */

$this->title = 'Create Driver';
?>
<div class="breadcrumbs">
    <?= Html::a('Home', ['site/index']) ?>
    &raquo;
    <?= Html::a('Driver', ['driver/index']) ?>
    &raquo; 
    <span>Create</span>
</div><!-- breadcrumbs -->
<div class="span-19">
    <div id="content">
        <h1>Create Driver</h1>

        <?= $this->render('_form', [
            'model' => $model,
            'vehicle' => $vehicle
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
                    <li><?= Html::a('List Driver', ['driver/index']) ?></li>
                    <li><?= Html::a('Create Driver', ['driver/create']) ?></li>
                </ul>
            </div>
        </div>	
    </div><!-- sidebar -->
</div>

