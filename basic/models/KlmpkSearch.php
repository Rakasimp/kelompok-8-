<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\klmpk;

/**
 * KlmpkSearch represents the model behind the search form of `app\models\klmpk`.
 */
class KlmpkSearch extends klmpk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_pengelompokkan', 'Kode_Menu', 'Harga_menu'], 'integer'],
            [['Jenis_Menu', 'Nama_menu'], 'safe'],
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
        $query = klmpk::find();

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
            'Id_pengelompokkan' => $this->Id_pengelompokkan,
            'Kode_Menu' => $this->Kode_Menu,
            'Harga_menu' => $this->Harga_menu,
        ]);

        $query->andFilterWhere(['like', 'Jenis_Menu', $this->Jenis_Menu])
            ->andFilterWhere(['like', 'Nama_menu', $this->Nama_menu]);

        return $dataProvider;
    }
}
