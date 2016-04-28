<?php

use miloschuman\highcharts\Highcharts;
use kartik\grid\GridView;

#use yii\grid\GridView;

$this->title = 'ตัวชี้วัด QOF 3 ';
$this->params['breadcrumbs'][] = [
    'label' => 'kpi data',
    'url' => ['kpi/index',]
];
$this->params['breadcrumbs'][] = $this->title;
?>

<div style="display: none">
    <?php
    echo Highcharts::widget([
        'scripts' => [
            'highcharts-more',
        ]
    ]);
    ?>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box box-danger">
            <div class="box-body">
                <div class="btn btn-danger"> GridView ตัวชี้วัด 3</div>
                <?php
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
                    'headerRowOptions' => ['class' => 'success'],
                    'tableOptions' => [
                        'class' => 'table table-striped table-bordered table-responsive table-hover'],
                    'columns' => [
                        [
                            'attribute' => 'kpiname',
                            'label' => 'ตัวชี้วัด',
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                        ],
                        [
                            'attribute' => 'divide',
                            'label' => 'ตัวตั้ง',
                            'format' => ['decimal', 0],
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-right'],
                        ],
                        [
                            'attribute' => 'denom',
                            'label' => 'ตัวหาร',
                            'format' => ['decimal', 0],
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-right'],
                        ],
                        [
                            'attribute' => 'target',
                            'label' => 'เป้าหมาย',
                            'format' => ['decimal', 2],
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                        ],
                        [
                            'attribute' => 'result',
                            'label' => 'ผลงาน',
                            'format' => ['decimal', 2],
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                        ],
                    ]
                ]);
                ?>
            </div>
        </div>
    </div>
</div>