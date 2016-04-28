<?php
$this->title = 'First Report ';
$this->params['breadcrumbs'][] = $this->title;



$link1 = Yii::$app->urlManager->createUrl([ 'first/page1']);
$link2 = Yii::$app->urlManager->createUrl([ 'first/page2']);
$link3 = Yii::$app->urlManager->createUrl([ 'first/page3']);
$link4 = Yii::$app->urlManager->createUrl([ 'first/page4']);
?>

<a href =  "<?php echo $link1; ?>" ">การแสดงค่าจาก Page 1 </a>  <br>
<a href =  "<?php echo $link2; ?>" ">การแสดงค่าจาก Page 2 </a>  <br>
<a href =  "<?php echo $link3; ?>" ">การแสดงค่าจาก Page 3 </a>  <br>
<a href =  "<?php echo $link4; ?>" ">การแสดงค่าจาก Page 4 </a>  <br>


    <?php Yii::$app->db->open()  ?>