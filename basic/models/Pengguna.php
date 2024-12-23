<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengguna".
 *
 * @property int $Id_pengguna
 * @property string|null $Nama_pengguna
 * @property string|null $Jabatan_pengguna
 * @property string|null $Alamat_pengguna
 * @property int|null $No_telp_pengguna
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_pengguna'], 'required'],
            [['Id_pengguna', 'No_telp_pengguna'], 'integer'],
            [['Nama_pengguna'], 'string', 'max' => 45],
            [['Jabatan_pengguna', 'Alamat_pengguna'], 'string', 'max' => 100],
            [['Id_pengguna'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_pengguna' => 'Id Pengguna',
            'Nama_pengguna' => 'Nama Pengguna',
            'Jabatan_pengguna' => 'Jabatan Pengguna',
            'Alamat_pengguna' => 'Alamat Pengguna',
            'No_telp_pengguna' => 'No Telp Pengguna',
        ];
    }
}
