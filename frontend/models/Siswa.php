<?php
namespace frontend\models;
use yii;

class Siswa extends \yii\db\ActiveRecord
{
	public static function tableName(){
		return 'siswa';
	}
	public function rules(){
		return [
		[['nisn','nama','tanggal_lahir','alamat','jk','telp','kelas'],'required','message'=>'Data tidak boleh kosong'],
		[['nama','alamat','jk','kelas'],'string'],
		[['nisn','telp'],'integer','message'=>'Data tidak boleh mengandung huruf'],
		];
	}
	public function attributeLabels(){
		return[
		"id"=>"ID",
		"nisn"=>"NISN",
		"nama"=>"Nama",
		"tanggal_lahir"=>"Tanggal Lahir",
		"alamat"=>"Alamat",
		"jk"=>"Gender",
		"telp"=>"No Telepon",
		"kelas"=>"Kelas",

		];
	}
}