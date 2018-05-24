<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "favoritos".
 *
 * @property int $id
 * @property int $id_device
 * @property int $id_programa
 * @property int $status
 */
class Favoritos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'favoritos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_device', 'id_programa', 'status'], 'required'],
            [['id_device', 'id_programa', 'status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_device' => Yii::t('app', 'Id Device'),
            'id_programa' => Yii::t('app', 'Id Programa'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
