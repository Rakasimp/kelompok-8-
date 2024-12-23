<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property string $Jenis_Menu
 *
 * @property Pengelompokkan[] $pengelompokkans
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Jenis_Menu'], 'required'],
            [['Jenis_Menu'], 'string', 'max' => 20],
            [['Jenis_Menu'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Jenis_Menu' => 'Jenis Menu',
        ];
    }

    /**
     * Gets query for [[Pengelompokkans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengelompokkans()
    {
        return $this->hasMany(Pengelompokkan::class, ['Jenis_Menu' => 'Jenis_Menu']);
    }
}
