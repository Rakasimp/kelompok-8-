<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\transaksi;

/**
 * TransaksiSearch represents the model behind the search form of `app\models\transaksi`.
 */
class TransaksiSearch extends transaksi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kode_transaksi', 'Tanggal_transaksi', 'Nama_pelanggan', 'Nama_Menu'], 'safe'],
            [['Kode_Menu', 'Id_pelanggan', 'Jumlah_item', 'Harga_Menu'], 'integer'],
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
        $query = transaksi::find();

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
            'Tanggal_transaksi' => $this->Tanggal_transaksi,
            'Kode_Menu' => $this->Kode_Menu,
            'Id_pelanggan' => $this->Id_pelanggan,
            'Jumlah_item' => $this->Jumlah_item,
            'Harga_Menu' => $this->Harga_Menu,
        ]);

        $query->andFilterWhere(['like', 'Kode_transaksi', $this->Kode_transaksi])
            ->andFilterWhere(['like', 'Nama_pelanggan', $this->Nama_pelanggan])
            ->andFilterWhere(['like', 'Nama_Menu', $this->Nama_Menu]);

        return $dataProvider;
    }
}
