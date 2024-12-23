<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $Kode_Menu
 * @property string|null $Nama_Menu
 * @property int|null $Harga_Menu
 *
 * @property Pengelompokkan[] $pengelompokkans
 * @property Transaksi[] $transaksis
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kode_Menu'], 'required'],
            [['Kode_Menu', 'Harga_Menu'], 'integer'],
            [['Nama_Menu'], 'string', 'max' => 100],
            [['Kode_Menu'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Kode_Menu' => 'Kode Menu',
            'Nama_Menu' => 'Nama Menu',
            'Harga_Menu' => 'Harga Menu',
        ];
    }

    /**
     * Gets query for [[Pengelompokkans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengelompokkans()
    {
        return $this->hasMany(Pengelompokkan::class, ['Kode_Menu' => 'Kode_Menu']);
    }

    /**
     * Gets query for [[Transaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::class, ['Kode_Menu' => 'Kode_Menu']);
    }
}
