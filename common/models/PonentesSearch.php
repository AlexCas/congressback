<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Ponentes;

/**
 * PonentesSearch represents the model behind the search form of `common\models\Ponentes`.
 */
class PonentesSearch extends Ponentes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_congreso', 'status'], 'integer'],
            [['nombre', 'especialidad', 'descripcion'], 'safe'],
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
        $query = Ponentes::find();

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
            'id_congreso' => $this->id_congreso,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'especialidad', $this->especialidad])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
