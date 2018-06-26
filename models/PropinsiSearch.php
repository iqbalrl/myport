<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Propinsi;

/**
 * PropinsiSearch represents the model behind the search form of `app\models\Propinsi`.
 */
class PropinsiSearch extends Propinsi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pro'], 'integer'],
            [['nm_pro'], 'safe'],
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
        $query = Propinsi::find();

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
            'id_pro' => $this->id_pro,
        ]);

        $query->andFilterWhere(['like', 'nm_pro', $this->nm_pro]);

        return $dataProvider;
    }
}
