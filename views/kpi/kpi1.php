<?php

use miloschuman\highcharts\Highcharts;
use yii\grid\GridView;


$this->title = 'ตัวชี้วัด QOF 1 ';
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
                    'headerRowOptions' => ['class' => 'danger'],
                    'tableOptions' => [
                        'class' => 'table table-striped table-bordered table-responsive table-hover'
                    ],
                ]);
                ?>
            </div>
        </div>
    </div>
</div>