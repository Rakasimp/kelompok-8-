<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengelompokkan".
 *
 * @property int $Id_pengelompokkan
 * @property int|null $Kode_Menu
 * @property string|null $Jenis_Menu
 * @property string|null $Nama_menu
 * @property int|null $Harga_menu
 *
 * @property Kategori $jenisMenu
 * @property Menu $kodeMenu
 */
class Pengelompokkan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengelompokkan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_pengelompokkan'], 'required'],
            [['Id_pengelompokkan', 'Kode_Menu', 'Harga_menu'], 'integer'],
            [['Jenis_Menu'], 'string', 'max' => 20],
            [['Nama_menu'], 'string', 'max' => 45],
            [['Id_pengelompokkan'], 'unique'],
            [['Jenis_Menu'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::class, 'targetAttribute' => ['Jenis_Menu' => 'Jenis_Menu']],
            [['Kode_Menu'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::class, 'targetAttribute' => ['Kode_Menu' => 'Kode_Menu']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_pengelompokkan' => 'Id Pengelompokkan',
            'Kode_Menu' => 'Kode Menu',
            'Jenis_Menu' => 'Jenis Menu',
            'Nama_menu' => 'Nama Menu',
            'Harga_menu' => 'Harga Menu',
        ];
    }

    /**
     * Gets query for [[JenisMenu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenisMenu()
    {
        return $this->hasOne(Kategori::class, ['Jenis_Menu' => 'Jenis_Menu']);
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
