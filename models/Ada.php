<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ada".
 *
 * @property integer $id
 * @property string $barang
 * @property integer $jumlah
 */
class Ada extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ada';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jumlah'], 'integer'],
            [['barang'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'barang' => 'Barang',
            'jumlah' => 'Jumlah',
        ];
    }
}
