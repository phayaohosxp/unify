<?php

use kartik\grid\GridView;
use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;
use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;

$this->title = 'Chart ตัวชี้วัด 5 ';
$this->params['breadcrumbs'][] = [
    'label' => 'กราฟตัวชี้วัด',
    'url' => ['chart/index',]
];
$this->params['breadcrumbs'][] = $this->title;
?>




<div style="display: none">
    <?php
    echo Highcharts::widget([
        'scripts' => [
            'highcharts-more',
            'themes/grid',
        ]
    ]);
    ?>
</div>
<?php
$kpidata = $dataProvider->getModels();
?>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h5 class="panel-title">
                    <?= $kpidata[0]['kpiname'] ?>  ปีงบประมาณ <?= $year; ?> 
                </h5>
            </div>
            <div class="panel-body">
                <div id="gauge"
                     style="min-width: 320px;
                     max-width: 400px;
                     height: 300px;
                     margin: 0 auto">

                </div>
            </div>
        </div>
    </div>
</div>

<hr>



<table class="table tab-hover table-striped table-bordered">
    <tr>
        <td><?= $kpidata[0]['acol'] ?></td>
        <td><?= number_format($kpidata[0]['divide'], 0) ?></td>
    </tr>
    <tr>
        <td><?= $kpidata[0]['bcol'] ?></td>
        <td><?= number_format($kpidata[0]['denom'], 0) ?></td>
    </tr>

    <tr>
        <td> เป้าหมาย</td>
        <td><?= number_format($kpidata[0]['target'], 0) ?></td>
    </tr>
    <tr>
        <td> ผลงาน</td>
        <td><?= number_format($kpidata[0]['result'], 2) ?></td>
    </tr>
</table>

  <?php 
$target = $kpidata[0]['target'];
$result = $kpidata[0]['result'];
$name = $kpidata[0]['kpiname'];
$consider = $target > $result ? "ไม่ผ่าน" : "ผ่าน" ;
$percent_color = $target > $result ? "red" : "green" ;
  ?> 
 

<?php

$this->registerJs("$(function () {

    $('#gauge').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text: '$name'
        },
        
credits: {text : '$consider',href : '#',
style: {
	cursor: 'pointer',
	color: '$percent_color',
	fontSize: '20px'

}    
},

        pane: {
            startAngle: -90,
            endAngle: 90,
            background: null
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            minorTickInterval: 'auto',
            minorTickWidth: 1,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#666',

            tickPixelInterval: 30,
            tickWidth: 2,
            tickPosition: 'inside',
            tickLength: 10,
            tickColor: '#666',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: ' ร้อยละ  '
            },
            plotBands: [{
                from: 0,
                to: $target,
                color: '#FF0000' // red
            },  {
                from: $target,
                to: 100,
                
                color: '#00EE00' // green
            }]
        },

        series: [{
            name: 'ผลลัพธ์',
            data: [$result],
            tooltip: {
                valueSuffix: ' %'
            }
        }]

    } );
});"
);
?>