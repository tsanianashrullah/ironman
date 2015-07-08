<?php

namespace app\models;
use yii;
class Barang extends \yii\db\ActiveRecord{

	public function tableName(){
		return 'barang';
	}
	public function rules(){
		return[
		[['id','jumlah_barang','nama_barang','keterangan'],'required'],
		[['id','jumlah_barang'],'int'],
		[['nama_barang'],'string',max=>40],
		[['keterangan'],'string',max=>30]
		]
	}
	public function attributeLabels(){
		return[
		"id"=>'ID',
		"nama_barang"=>'Nama Barang',
		"jumlah_barang"=>'Jumlah',
		"keterangan"=>'Keterangan',
		];
	}
}
?>