<?php

namespace app\controllers;

class ChartController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionChart1() {
        return $this->render('chart1');
    }

    public function actionChart2() {
        return $this->render('chart2');
    }

    public function actionChart3() {
        
        $y = isset($_REQUEST['year']) ? $_REQUEST['year'] : date('Y');
        $ycal = $y + 543;

        $sql = "SELECT k.kpiname,k.acol,k.bcol,k.target,d.divide,d.denom,d.byear,
round(d.divide / d.denom * 100,2) as result
from kpi k
LEFT JOIN kpidata d on k.id = d.kpiid
where d.byear = '$ycal' and k.target > 0";

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }

        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => [
                'pagesize' => 50
            ],
        ]);

        return $this->render('chart3', [
                    'dataProvider' => $dataProvider,
                    'ycal' => $ycal,
        ]);
    }

    
        public function actionChart4() {
        
        $y = isset($_REQUEST['year']) ? $_REQUEST['year'] : date('Y');
        $ycal = $y + 543;

        $sql = "SELECT k.id,k.kpiname,k.acol,k.bcol,k.target,d.divide,d.denom,d.byear,
round(d.divide / d.denom * 100,2) as result
from kpi k
LEFT JOIN kpidata d on k.id = d.kpiid
where d.byear = '$ycal' and k.target > 0";

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }

        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => [
                'pagesize' => 50
            ],
        ]);

        return $this->render('chart4', [
                    'dataProvider' => $dataProvider,
                    'ycal' => $ycal,
        ]);
    }
    
           public function actionChart5($kpiid, $year) {
        
        $sql = "SELECT k.id,k.kpiname,k.acol,k.bcol,k.target,d.divide,d.denom,d.byear,
round(d.divide / d.denom * 100,2) as result
from kpi k
LEFT JOIN kpidata d on k.id = d.kpiid
where d.byear = $year and k.id = $kpiid ";

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }

        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => [
                'pagesize' => 50
            ],
        ]);

        return $this->render('chart5', [
                    'dataProvider' => $dataProvider,
                    'year' => $year,
 
        ]);
    }
    
}
