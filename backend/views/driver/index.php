<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DriverSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Drivers';
?>
<div class="breadcrumbs">
    <?= Html::a('Home', ['site/index']) ?>
    &raquo;
    <span>Driver</span>
</div><!-- breadcrumbs -->
<div class="span-19">
    <div id="content">
        <h1>List Driver</h1>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'name',
                'birth_date',
                'phone',
                [
                    'attribute' => 'avatar',
                    'format' => 'html',
                    'content' => function($data) {
                        if ($data->avatar == null) {
                            return Html::img('images/avatar.png', ['alt' => 'yii', 'width' => '100']);
                        }
                        return Html::img('uploads/'.$data->avatar, ['alt' => 'yii', 'width' => '100']);
                    }
                ],
                //'vehicle_id',

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
                    <li><?= Html::a('List Driver', ['driver/index']) ?></li>
                    <li><?= Html::a('Create Driver', ['driver/create']) ?></li>
                </ul>
            </div>
        </div>	
    </div><!-- sidebar -->
</div>
