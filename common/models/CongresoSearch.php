<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Congreso;

/**
 * CongresoSearch represents the model behind the search form of `common\models\Congreso`.
 */
class CongresoSearch extends Congreso
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['nombre', 'descripcion', 'fechainicio', 'fechafinal', 'latitud', 'logitud'], 'safe'],
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
        $query = Congreso::find();

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
            'fechainicio' => $this->fechainicio,
            'fechafinal' => $this->fechafinal,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'latitud', $this->latitud])
            ->andFilterWhere(['like', 'logitud', $this->logitud]);

        return $dataProvider;
    }
}
