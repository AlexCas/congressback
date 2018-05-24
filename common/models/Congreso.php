<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "congreso".
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $fechainicio
 * @property string $fechafinal
 * @property string $latitud
 * @property string $logitud
 * @property int $status
 *
 * @property Patrocinadores[] $patrocinadores
 * @property Ponentes[] $ponentes
 * @property Programa[] $programas
 */
class Congreso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'congreso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'fechainicio', 'fechafinal', 'latitud', 'logitud'], 'required'],
            [['descripcion', 'latitud', 'logitud'], 'string'],
            [['fechainicio', 'fechafinal'], 'safe'],
            [['status'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
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
            'fechainicio' => Yii::t('app', 'Fechainicio'),
            'fechafinal' => Yii::t('app', 'Fechafinal'),
            'latitud' => Yii::t('app', 'Latitud'),
            'logitud' => Yii::t('app', 'Logitud'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatrocinadores()
    {
        return $this->hasMany(Patrocinadores::className(), ['id_congreso' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPonentes()
    {
        return $this->hasMany(Ponentes::className(), ['id_congreso' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramas()
    {
        return $this->hasMany(Programa::className(), ['id_congreso' => 'id']);
    }
}
