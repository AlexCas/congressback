<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "temario".
 *
 * @property int $id
 * @property int $id_programa
 * @property string $tema
 * @property int $status
 *
 * @property Programa $programa
 */
class Temario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'temario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_programa', 'tema', 'status'], 'required'],
            [['id_programa', 'status'], 'integer'],
            [['tema'], 'string', 'max' => 100],
            [['id_programa'], 'exist', 'skipOnError' => true, 'targetClass' => Programa::className(), 'targetAttribute' => ['id_programa' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_programa' => Yii::t('app', 'Id Programa'),
            'tema' => Yii::t('app', 'Tema'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrograma()
    {
        return $this->hasOne(Programa::className(), ['id' => 'id_programa']);
    }
}
