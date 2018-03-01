<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VehicleTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehicle Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breadcrumbs">
    <?= Html::a('Home', ['site/index']) ?>
    &raquo;
    <span>Vehicle Types</span>
</div><!-- breadcrumbs -->
<div class="span-19">
    <div id="content">
        <h1>List Vehicle Types</h1>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'name',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
        
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
