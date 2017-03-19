<?php

namespace common\models\store;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\store\Products;

/**
 * ProductsSearch represents the model behind the search form about `common\models\store\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'CategoryId', 'status', 'created_at', 'update_at', 'created_by', 'updated_by'], 'integer'],
            [['name', 'Des', 'img_url', 'img_path'], 'safe'],
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
        $query = Products::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'CategoryId' => $this->CategoryId,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'update_at' => $this->update_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'Des', $this->Des])
            ->andFilterWhere(['like', 'img_url', $this->img_url])
            ->andFilterWhere(['like', 'img_path', $this->img_path]);

        return $dataProvider;
    }
}
