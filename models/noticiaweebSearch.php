<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\noticiaweeb;

/**
 * noticiaweebSearch represents the model behind the search form about `app\models\noticiaweeb`.
 */
class noticiaweebSearch extends noticiaweeb
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TituloWEEB', 'CuerpoWEEB', 'CategoriaWEEB', 'FechaWEEB'], 'safe'],
            [['EstadoWEEB', 'IdNoticiaWEEB'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = noticiaweeb::find();

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
            'EstadoWEEB' => $this->EstadoWEEB,
            'FechaWEEB' => $this->FechaWEEB,
            'IdNoticiaWEEB' => $this->IdNoticiaWEEB,
        ]);

        $query->andFilterWhere(['like', 'TituloWEEB', $this->TituloWEEB])
            ->andFilterWhere(['like', 'CuerpoWEEB', $this->CuerpoWEEB])
            ->andFilterWhere(['like', 'CategoriaWEEB', $this->CategoriaWEEB]);

        return $dataProvider;
    }
}
