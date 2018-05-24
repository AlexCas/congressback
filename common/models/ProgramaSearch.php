<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Programa;

/**
 * ProgramaSearch represents the model behind the search form of `common\models\Programa`.
 */
class ProgramaSearch extends Programa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_ponente', 'id_congreso', 'status'], 'integer'],
            [['nombre', 'fecha', 'hora', 'latitud', 'longitud', 'descripcion'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Programa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'fecha' => $this->fecha,
            'hora' => $this->hora,
            'id_ponente' => $this->id_ponente,
            'id_congreso' => $this->id_congreso,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'latitud', $this->latitud])
            ->andFilterWhere(['like', 'longitud', $this->longitud])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
