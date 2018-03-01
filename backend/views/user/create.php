<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = 'Create User';
?>
<div class="breadcrumbs">
    <?= Html::a('Home', ['site/index']) ?>
    &raquo;
    <?= Html::a('User', ['user/index']) ?>
    &raquo; 
    <span>Create</span>
</div><!-- breadcrumbs -->
<div class="span-19">
    <div id="content">
        <h1>Create User</h1>

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
                    <li><?= Html::a('List User', ['user/index']) ?></li>
                    <li><?= Html::a('Create User', ['user/create']) ?></li>
                </ul>
            </div>
        </div>	
    </div><!-- sidebar -->
</div>

