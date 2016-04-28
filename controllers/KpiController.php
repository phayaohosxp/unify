<?php

namespace app\controllers;

use yii\data\ArrayDataProvider;

class KpiController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionKpi1() {

        $sql = "SELECT k.kpiname,k.acol,k.bcol,k.target
from kpi k";

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => [
                'pagesize' => 5
            ],
        ]);

        return $this->render('kpi1', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionKpi2() {

        $sql = "SELECT k.kpiname,k.acol,k.bcol,k.target,d.divide,d.denom,d.byear,
round(d.divide / d.denom * 100,2) as result
from kpi k
LEFT JOIN kpidata d on k.id = d.kpiid
where d.byear = 2559";

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => [
                'pagesize' => 5
            ],
        ]);

        return $this->render('kpi2', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionKpi3() {

        $sql = "SELECT k.kpiname,k.acol,k.bcol,k.target,d.divide,d.denom,d.byear,
round(d.divide / d.denom * 100,2) as result
from kpi k
LEFT JOIN kpidata d on k.id = d.kpiid
where d.byear = 2559";

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => [
                'pagesize' => 5
            ],
        ]);

        return $this->render('kpi3', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionKpi4() {

        $sql = "SELECT k.kpiname,k.acol,k.bcol,k.target,d.divide,d.denom,d.byear,
round(d.divide / d.denom * 100,2) as result
from kpi k
LEFT JOIN kpidata d on k.id = d.kpiid
where d.byear = 2559";

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => [
                'pagesize' => 5
            ],
        ]);

        return $this->render('kpi4', [
                    'dataProvider' => $dataProvider,
        ]);
    }

}
