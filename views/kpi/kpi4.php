<?php

use miloschuman\highcharts\Highcharts;
use kartik\grid\GridView;

#use yii\grid\GridView;

$this->title = 'ตัวชี้วัด QOF 4 ';
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
             <div class="box-body">
                <div class="btn btn-info"> Kartik GridView ตัวชี้วัด 4</div>
                <?php
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'resizableColumns' => true,
                     'summary' => '',
                    'responsive' => true,
                    'hover' => true,
                    'showPageSummary' => true,
                    'panel' =>
                    ['before' => '',
                        'heading' => 'ตัวชี้วัด ปีงบประมาณ 2559 ',
                        'after' => 'วันเดือนปี ประมวลผล :' . '   ' . date('Y-m-d: H:i:s'),
                 #       'footer' => false,
                    ],
                    'floatHeader' => true,
                    'columns' => [
                        [
                            'attribute' => 'kpiname',
                            'label' => 'ตัวชี้วัด',
                            'headerOptions' => ['class' => 'text-center','style' => 'background-color:#66CC00'],
                            'contentOptions' => ['class' => 'text-left',],
                        ],
                        [
                            'attribute' => 'divide',
                            'label' => 'ตัวตั้ง',
                            'format' => ['decimal', 0],
                            'pageSummary' => true,
                            'headerOptions' => ['class' => 'text-center','style' => 'background-color:#66CC00'],
                            'contentOptions' => ['class' => 'text-right'],
                        ],
                        [
                            'attribute' => 'denom',
                            'label' => 'ตัวหาร',
                            'format' => ['decimal', 0],
                            'pageSummary' => true,
                            'headerOptions' => ['class' => 'text-center','style' => 'background-color:#66CC00'],
                            'contentOptions' => ['class' => 'text-right'],
                        ],
                        [
                            'attribute' => 'target',
                            'label' => 'เป้าหมาย',
                            'format' => ['decimal', 2],
                            'headerOptions' => ['class' => 'text-center','style' => 'background-color:#66CC00'],
                            'contentOptions' => ['class' => 'text-center'],
                        ],
                        [
                            'attribute' => 'result',
                            'label' => 'ผลงาน',
                            'format' => ['decimal', 2],
                            'headerOptions' => ['class' => 'text-center','style' => 'background-color:#66CC00'],
                            'contentOptions' => ['class' => 'text-center','style' => 'background-color:#CCFF66'],
                        ],
                    ]
                ]);
                ?>
            </div>
        </div>
    </div>
 