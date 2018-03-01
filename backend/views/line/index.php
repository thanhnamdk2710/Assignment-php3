<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List Lines';
?>
<div class="breadcrumbs">
    <?= Html::a('Home', ['site/index']) ?>
    &raquo;
    <span>Line</span>
</div><!-- breadcrumbs -->
<div class="span-19">
    <div id="content">
        <h1>List Line</h1>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'map',
                    'format' => 'html',
                    'content' => function($data){
                        return Html::img('uploads/'.$data->map, ['alt' => 'yii', 'width' => '100']);
                    }
                ],
                'name',
                'start_time_operation',
                'end_time_operation',
                'vehicle_type',
                

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
                    <li><?= Html::a('List Line', ['line/index']) ?></li>
                    <li><?= Html::a('Create Line', ['line/create']) ?></li>
                </ul>
            </div>
        </div>	
    </div><!-- sidebar -->
</div>