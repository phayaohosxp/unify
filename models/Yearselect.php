<?php

namespace app\models;

use Yii;

class Yearselect extends \yii\db\ActiveRecord {

    public static function tableName() {
        return 'yearselect';
    }

    public function rules() {
        return [
            [['yearthai', 'yearvalue'], 'integer'],
        ];
    }

    public function attributeLabels() {
        return [
            'id' => 'ID',
            'yearthai' => 'ปีพุทธศักราช',
            'yearvalue' => 'ปีคริสต์ศักราช',
        ];
    }

}
