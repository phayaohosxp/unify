<?php

use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;

$this->title = 'Yii2 Framework';
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


<div class="container content">

</div> 



</body>
</html>
