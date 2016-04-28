<?php

use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;

$this->title = 'จำนวน Error จาก HDC เขตสุขภาพที่ 1 ';
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
 

