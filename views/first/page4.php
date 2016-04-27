<?php
 

 echo $name;
  echo "<hr />";
  
  
 $link1 = Yii::$app->urlManager->createUrl([
     'first/page4',
     'xname' => 'กกกกกก',
     'yname' => 'ขขขขขขขข'
     ]);
 
 
 echo "<hr />";
 
 
  $link2 = Yii::$app->urlManager->createUrl([
      
     'first/page4',
     'xname' => 'aaaa',
     'yname' => 'bbbbb'
     ]);
 ?>

 <a href =  "<?php echo $link1; ?>" ">ชื่อภาษาไทย </a>  <br>
  <a href =  "<?php echo $link2; ?>" ">ชื่อ Eng </a>
         