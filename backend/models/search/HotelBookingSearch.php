<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\HotelBooking;

/**
 * HotelBookingSearch represents the model behind the search form about `common\models\HotelBooking`.
 */
class HotelBookingSearch extends HotelBooking
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'room_id', 'menu_id', 'start_date', 'end_date', 'price', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['name', 'surname', 'pid', 'country', 'city', 'mobile', 'email'], 'safe'],
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
        $query = HotelBooking::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'room_id' => $this->room_id,
            'menu_id' => $this->menu_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'price' => $this->price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'pid', $this->pid])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
