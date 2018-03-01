<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\VehicleType */

$this->title = 'Create Vehicle Type';
?>
<div class="breadcrumbs">
<?= Html::a('Home', ['site/index']) ?>
&raquo;
<?= Html::a('Vehicle Types', ['vehicle-type/index']) ?>
&raquo; 
<span>Create</span>
</div><!-- breadcrumbs -->
<div class="span-19">
<div id="content">
    <h1>Create Vehicle Types</h1>

    <?= $this->render('_form', [
        'model' => $model,
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
                    <li><?= Html::a('List Vehicle Types', ['vehicle-type/index']) ?></li>
                    <li><?= Html::a('Create Vehicle Types', ['vehicle-type/create']) ?></li>
                </ul>
            </div>
        </div>	
    </div><!-- sidebar -->
</div>

