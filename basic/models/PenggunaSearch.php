<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\pengguna;

/**
 * PenggunaSearch represents the model behind the search form of `app\models\pengguna`.
 */
class PenggunaSearch extends pengguna
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_pengguna', 'No_telp_pengguna'], 'integer'],
            [['Nama_pengguna', 'Jabatan_pengguna', 'Alamat_pengguna'], 'safe'],
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
        $query = pengguna::find();

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
            'Id_pengguna' => $this->Id_pengguna,
            'No_telp_pengguna' => $this->No_telp_pengguna,
        ]);

        $query->andFilterWhere(['like', 'Nama_pengguna', $this->Nama_pengguna])
            ->andFilterWhere(['like', 'Jabatan_pengguna', $this->Jabatan_pengguna])
            ->andFilterWhere(['like', 'Alamat_pengguna', $this->Alamat_pengguna]);

        return $dataProvider;
    }
}
