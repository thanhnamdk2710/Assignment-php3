<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breadcrumbs">
    <?= Html::a('Home', ['site/index']) ?>
    &raquo;
    <span>Station</span>
</div><!-- breadcrumbs -->
<div class="span-19">
    <div id="content">
        <h1>List Station</h1>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'name',
                'position_station',
                'line_id',

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
                    <li><?= Html::a('List Station', ['station/index']) ?></li>
                    <li><?= Html::a('Create Station', ['station/create']) ?></li>
                </ul>
            </div>
        </div>	
    </div><!-- sidebar -->
</div>
