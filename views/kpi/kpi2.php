<?php

use miloschuman\highcharts\Highcharts;
use kartik\grid\GridView;

$this->title = 'ตัวชี้วัด QOF 2 ';
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
        <div class="box box-warning">
            <div class="box-body">
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
                            'hAlign' => 'left',
                            'vAlign' => 'middle',
                        ],
                        [
                            'attribute' => 'divide',
                            'label' => 'ตัวตั้ง',
                            'format' => ['decimal', 0],
                            'hAlign' => 'right',
                            'vAlign' => 'middle',
                        ],
                        [
                            'attribute' => 'denom',
                            'label' => 'ตัวหาร',
                            'format' => ['decimal', 0],
                            'hAlign' => 'right',
                            'vAlign' => 'middle',
                        ],
                        [
                            'attribute' => 'target',
                            'label' => 'เป้าหมาย',
                            'format' => ['decimal', 2],
                            'hAlign' => 'right',
                            'vAlign' => 'middle',
                        ],
                        [
                            'attribute' => 'result',
                            'label' => 'ผลงาน',
                            'format' => ['decimal', 2],
                            'hAlign' => 'right',
                            'vAlign' => 'middle',
                        ],
                    ]
                ]);
                ?>
            </div>
        </div>
    </div>
</div>