<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property string $Kode_transaksi
 * @property string|null $Tanggal_transaksi
 * @property int|null $Kode_Menu
 * @property int|null $Id_pelanggan
 * @property string|null $Nama_pelanggan
 * @property string|null $Nama_Menu
 * @property int|null $Jumlah_item
 * @property int|null $Harga_Menu
 *
 * @property Menu $kodeMenu
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kode_transaksi'], 'required'],
            [['Tanggal_transaksi'], 'safe'],
            [['Kode_Menu', 'Id_pelanggan', 'Jumlah_item', 'Harga_Menu'], 'integer'],
            [['Kode_transaksi'], 'string', 'max' => 20],
            [['Nama_pelanggan'], 'string', 'max' => 45],
            [['Nama_Menu'], 'string', 'max' => 100],
            [['Kode_transaksi'], 'unique'],
            [['Kode_Menu'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::class, 'targetAttribute' => ['Kode_Menu' => 'Kode_Menu']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Kode_transaksi' => 'Kode Transaksi',
            'Tanggal_transaksi' => 'Tanggal Transaksi',
            'Kode_Menu' => 'Kode Menu',
            'Id_pelanggan' => 'Id Pelanggan',
            'Nama_pelanggan' => 'Nama Pelanggan',
            'Nama_Menu' => 'Nama Menu',
            'Jumlah_item' => 'Jumlah Item',
            'Harga_Menu' => 'Harga Menu',
        ];
    }

    /**
     * Gets query for [[KodeMenu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeMenu()
    {
        return $this->hasOne(Menu::class, ['Kode_Menu' => 'Kode_Menu']);
    }
}
