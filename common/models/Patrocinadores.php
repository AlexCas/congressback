<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "patrocinadores".
 *
 * @property int $id
 * @property string $nombre
 * @property string $logo
 * @property string $direccion
 * @property string $lat
 * @property string $longitud
 * @property int $id_congreso
 * @property int $status
 *
 * @property Congreso $congreso
 */
class Patrocinadores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patrocinadores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'logo', 'direccion', 'lat', 'longitud', 'id_congreso', 'status'], 'required'],
            [['logo', 'direccion', 'lat', 'longitud'], 'string'],
            [['id_congreso', 'status'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
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
            'logo' => Yii::t('app', 'Logo'),
            'direccion' => Yii::t('app', 'Direccion'),
            'lat' => Yii::t('app', 'Lat'),
            'longitud' => Yii::t('app', 'Longitud'),
            'id_congreso' => Yii::t('app', 'Id Congreso'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCongreso()
    {
        return $this->hasOne(Congreso::className(), ['id' => 'id_congreso']);
    }
}
