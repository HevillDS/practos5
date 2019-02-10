<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Iphone;

/**
 * IphoneSearch represents the model behind the search form of `app\models\Iphone`.
 */
class IphoneSearch extends Iphone
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iphone_id', 'rating', 'shop_id'], 'integer'],
            [['model', 'description'], 'safe'],
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
        $query = Iphone::find();

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
            'iphone_id' => $this->iphone_id,
            'rating' => $this->rating,
            'shop_id' => $this->shop_id,
        ]);

        $query->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
