<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengeluaran".
 *
 * @property integer $id
 * @property string $nama_barang
 * @property integer $jumlah
 * @property string $ket
 */
class Pengeluaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pengeluaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_barang', 'jumlah', 'ket'], 'required'],
            [['jumlah'], 'integer'],
            [['nama_barang', 'ket'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_barang' => 'Nama Barang',
            'jumlah' => 'Jumlah',
            'ket' => 'Ket',
        ];
    }
}
