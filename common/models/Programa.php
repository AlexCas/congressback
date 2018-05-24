<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "programa".
 *
 * @property int $id
 * @property string $nombre
 * @property string $fecha
 * @property string $hora
 * @property string $latitud
 * @property string $longitud
 * @property string $descripcion
 * @property int $id_ponente
 * @property int $id_congreso
 * @property int $status
 *
 * @property Documentos[] $documentos
 * @property Ponentes $ponente
 * @property Congreso $congreso
 * @property Temario[] $temarios
 */
class Programa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'programa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'fecha', 'hora', 'latitud', 'longitud', 'descripcion', 'id_ponente', 'id_congreso', 'status'], 'required'],
            [['fecha', 'hora'], 'safe'],
            [['latitud', 'longitud', 'descripcion'], 'string'],
            [['id_ponente', 'id_congreso', 'status'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
            [['id_ponente'], 'exist', 'skipOnError' => true, 'targetClass' => Ponentes::className(), 'targetAttribute' => ['id_ponente' => 'id']],
            [['id_congreso'], 'exist', 'skipOnError' => true, 'targetClass' => Congreso::className(), 'targetAttribute' => ['id_congreso' => 'id']],
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
            'fecha' => Yii::t('app', 'Fecha'),
            'hora' => Yii::t('app', 'Hora'),
            'latitud' => Yii::t('app', 'Latitud'),
            'longitud' => Yii::t('app', 'Longitud'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'id_ponente' => Yii::t('app', 'Id Ponente'),
            'id_congreso' => Yii::t('app', 'Id Congreso'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocumentos()
    {
        return $this->hasMany(Documentos::className(), ['id_programa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPonente()
    {
        return $this->hasOne(Ponentes::className(), ['id' => 'id_ponente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCongreso()
    {
        return $this->hasOne(Congreso::className(), ['id' => 'id_congreso']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTemarios()
    {
        return $this->hasMany(Temario::className(), ['id_programa' => 'id']);
    }
}
