<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "documentos".
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property int $url
 * @property int $id_programa
 * @property int $status
 *
 * @property Programa $programa
 */
class Documentos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'documentos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'url', 'id_programa', 'status'], 'required'],
            [['descripcion'], 'string'],
            [['url', 'id_programa', 'status'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
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
            'nombre' => Yii::t('app', 'Nombre'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'url' => Yii::t('app', 'Url'),
            'id_programa' => Yii::t('app', 'Id Programa'),
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
