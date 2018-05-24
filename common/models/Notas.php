<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "notas".
 *
 * @property int $id
 * @property int $id_device
 * @property int $id_programa
 * @property string $notas
 * @property int $status
 */
class Notas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_device', 'id_programa', 'notas', 'status'], 'required'],
            [['id_device', 'id_programa', 'status'], 'integer'],
            [['notas'], 'string'],
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
            'notas' => Yii::t('app', 'Notas'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
