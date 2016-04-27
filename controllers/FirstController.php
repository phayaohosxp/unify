<?php

namespace app\controllers;

class FirstController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionPage1() {

        $a = 'Yii2 Framework  Huahin';

        return $this->render('page1', [
                    'a' => $a,
        ]);
    }

    public function actionPage2() {

        $hello = "Hello World From  page2";
        $a = 5;
        $b = 3;
        $c = $a + $b;

        return $this->render('page2', [
                    'hello' => $hello,
                    'x' => $a,
                    'y' => $b,
                    'c' => $c
        ]);
    }

 
    public function actionPage3() {
        
        
        
        return $this->render('page3', [
            
            
        ]);
    }
    
    
}
