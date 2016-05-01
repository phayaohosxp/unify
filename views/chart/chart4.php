<?php
$gdata = $dataProvider->getModels();

use kartik\grid\GridView;
use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;
use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;
use app\models\Yearselect;

$this->title = 'Chart ตัวชี้วัด ';
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



    $xname = [];
    $result = [];
    $target = [];
    $totaldivide = 0;  #ตัวตั้ง#
    $totaldenom = 0;  //ตัวหาร
    $totalpers = 0;  //ตัวหาร

    for ($i = 0; $i < count($gdata); $i++) {
        $xname[] = $gdata[$i]['kpiname'];
        $result[] = $gdata[$i]['result'];
        $target[] = $gdata[$i]['target'];
        $totaldivide += $gdata[$i]['divide'];
        $totaldenom += $gdata[$i]['denom'];
    }

    $xlabel = implode(" ',' ", $xname);
    $rvalue = implode(" , ", $result);
    $tvalue = implode(" , ", $target);

    $totalpers = $totaldivide * 100 / $totaldenom;


    $y = isset($_REQUEST['year']) ? $_REQUEST['year'] : date('Y');
    ?>
</div>

<?= Html::beginForm(); ?>
<?= Html::label('ปีงบประมาณ') ?>
<?=
Html::dropDownList('year', $y, ArrayHelper::map(
                Yearselect::find()->orderBy('yearvalue desc')->all(), 'yearvalue', 'yearthai'), ['class' => 'form-control', 'prompt' => 'โปรดเลือกปี...', 'required' => true]);
?>
<?= Html::submitButton('ค้นหา', ['class' => 'btn btn-primary']); ?>
<?= Html::endForm(); ?>

<hr>




<div class="row" style="padding: 10px">
    <div id="container"></div><br> 
</div>



<?php
$this->registerjs("$(function () {
    $('#container').highcharts({
        title: {
            text: 'Chart แสดงตัวชี้วัดปีงบประมาณ : $ycal'
        },
        xAxis: {
            categories: ['$xlabel']
        },
        labels: {
            items: [{
                html: '',
                style: {
                    left: '50px',
                    top: '18px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                }
            }]
        },
        series: [{
            type: 'column',
            name: 'ผลงาน',
            data: [$rvalue]
        }, {
            type: 'spline',
            name: 'เป้าหมาย',
            data: [$tvalue]
        }]
    });
});
");
?>

<div class="row">
    <div class="col-md-12">
        <div class="box-body">

            <?php
            echo GridView::widget([
                'dataProvider' => $dataProvider,
                'resizableColumns' => true,
                'bordered' => true,
                'summary' => '',
                'responsive' => true,
                'hover' => true,
                #     'showPageSummary' => true,
                'showFooter' => TRUE,
                'panel' =>
                ['before' => '',
                    'heading' => 'ตัวชี้วัด ปีงบประมาณ' . '   ' . $ycal,
                    'after' => 'วันเดือนปี ประมวลผล :' . '   ' . date('Y-m-d: H:i:s'),
                #       'footer' => false,
                ],
                'floatHeader' => true,
                'columns' => [
                    [
                        //     'attribute' => 'kpiname',
                        'label' => 'ตัวชี้วัด',
                        'footer' => 'รวมทั้งสิ้น',
                        'format' => 'raw',
                        'footerOptions' => ['class' => 'text-right',],
                        'headerOptions' => ['class' => 'text-center', 'style' => 'background-color:#66CC00'],
                        'contentOptions' => ['class' => 'text-left',],
                        'value' => function($data) {
                    return Html::a($data['kpiname'], 'chart5?kpiid=' . $data['id'] .
                                    '&year=' . $data['byear']
                    );
                },
                    ],
                    [
                        'attribute' => 'divide',
                        'label' => 'ตัวตั้ง',
                        'format' => ['decimal', 0],
                        'footer' => number_format($totaldivide, 0),
                        'footerOptions' => ['class' => 'text-right',],
                        'headerOptions' => ['class' => 'text-center', 'style' => 'background-color:#66CC00'],
                        'contentOptions' => ['class' => 'text-right'],
                    ],
                    [
                        'attribute' => 'denom',
                        'label' => 'ตัวหาร',
                        'format' => ['decimal', 0],
                        'footer' => number_format($totaldenom, 0),
                        'footerOptions' => ['class' => 'text-right'],
                        'headerOptions' => ['class' => 'text-center', 'style' => 'background-color:#66CC00'],
                        'contentOptions' => ['class' => 'text-right'],
                    ],
                    [
                        'attribute' => 'target',
                        'label' => 'เป้าหมาย',
                        'format' => ['decimal', 2],
                        'footer' => '-',
                        'footerOptions' => ['class' => 'text-center'],
                        'headerOptions' => ['class' => 'text-center', 'style' => 'background-color:#66CC00'],
                        'contentOptions' => ['class' => 'text-center'],
                    ],
                    [
                        'attribute' => 'result',
                        'label' => 'ผลลัพธ์',
                        'format' => ['decimal', 2],
                        'footer' => number_format($totalpers, 2),
                        'footerOptions' => ['class' => 'text-center'],
                        'headerOptions' => ['class' => 'text-center', 'style' => 'background-color:#66CC00'],
                        'contentOptions' => ['class' => 'text-center', 'style' => 'background-color:#CCFF66'],
                    ],
                ]
            ]);
            ?>
        </div>
    </div>
</div>
