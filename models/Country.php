<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property string $Code
 * @property string $Name
 * @property int|null $Capital
 * @property string $Code2
 */
class Country extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['Code'], 'required'],
            [['Capital'], 'integer'],
            [['Code'], 'string', 'max' => 3],
            [['Name'], 'string', 'max' => 52],
            [['Code2'], 'string', 'max' => 2],
            [['Code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'Code' => 'Codigo',
            'Name' => Yii::t('app', 'Name'),
            'Capital' => Yii::t('app', 'Capital'),
            'Code2' => Yii::t('app', 'Code2'),
        ];
    }

}
