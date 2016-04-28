<?php
$this->title = 'แสดงรายการตัวชี้วัด QOF ปีงบประมาณ 2559 ';
$this->params['breadcrumbs'][] = $this->title;



$link1 = Yii::$app->urlManager->createUrl([ 'kpi/kpi1']);
$link2 = Yii::$app->urlManager->createUrl([ 'kpi/kpi2']);
$link3 = Yii::$app->urlManager->createUrl([ 'kpi/kpi3']);
$link4 = Yii::$app->urlManager->createUrl([ 'kpi/kpi4']);
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-warning" style="padding: 10px">

            <table>
                <thead>

                </thead>
            </table>
            <a href =  "<?php echo $link1; ?>" ">แสดงผลตัวชี้วัด QOF 1 </a>  <hr>
            <a href =  "<?php echo $link2; ?>" ">แสดงผลตัวชี้วัด QOF 2 </a>  <hr>
            <a href =  "<?php echo $link3; ?>" ">แสดงผลตัวชี้วัด QOF 3 </a>  <hr>
            <a href =  "<?php echo $link4; ?>" ">แสดงผลตัวชี้วัด QOF 4 </a>  <hr>

        </div>
    </div>
</div>
