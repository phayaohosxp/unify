<?php
$this->title = 'Chart Hight ';
$this->params['breadcrumbs'][] = $this->title;



$link1 = Yii::$app->urlManager->createUrl([ 'chart/chart1']);
$link2 = Yii::$app->urlManager->createUrl([ 'chart/chart2']);
$link3 = Yii::$app->urlManager->createUrl([ 'chart/chart3']);
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-warning" style="padding: 10px">

            <table>
                <thead>

                </thead>
            </table>
            <a href =  "<?php echo $link1; ?>" ">กราฟ column Hightchart </a>  <hr>
            <a href =  "<?php echo $link2; ?>" ">กราฟ combine Higtchart </a>  <hr>
            <a href =  "<?php echo $link3; ?>" ">กราฟ คอลัมน์ จาก Database  </a>  <hr>


        </div>
    </div>
</div>
