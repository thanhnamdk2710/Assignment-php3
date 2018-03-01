<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Vehicle */

$this->title = $model->name;
?>
<div class="breadcrumbs">
<?= Html::a('Home', ['site/index']) ?>
&raquo;
<?= Html::a('Vehicle', ['vehicle/index']) ?>
&raquo; 
<span>View</span>
</div><!-- breadcrumbs -->
<div class="span-19">
<div id="content">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn-action']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn-action',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'capacity',
            'vehicle_type',
            'line_id',
        ],
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
