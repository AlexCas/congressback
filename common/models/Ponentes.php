<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ponentes".
 *
 * @property int $id
 * @property string $nombre
 * @property string $especialidad
 * @property string $descripcion
 * @property int $id_congreso
 * @property int $status
 *
 * @property Congreso $congreso
 * @property Programa[] $programas
 */
class Ponentes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ponentes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'especialidad', 'descripcion', 'id_congreso', 'status'], 'required'],
            [['descripcion'], 'string'],
            [['id_congreso', 'status'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
            [['especialidad'], 'string', 'max' => 200],
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
            'especialidad' => Yii::t('app', 'Especialidad'),
            'descripcion' => Yii::t('app', 'Descripcion'),
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramas()
    {
        return $this->hasMany(Programa::className(), ['id_ponente' => 'id']);
    }
}
