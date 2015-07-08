<?php
namespace frontend\models;

use yii;
use yii\db\ActiveRecord;
class Guru extends ActiveRecord
{
    public $file;
    public static function tableName(){
        return 'guru';
    }
    public function rules()
    {
        return [
        [['nip','nama','alamat','tanggal_masuk','jk','jabatan'],'required','message'=>'Data Tidak Boleh Kosong'],
        [['nama','alamat','jabatan','jk'],'string'],
        [['file'], 'file'],
        [['nip'],'string','max'=>14],
        [['logo'],'string','max'=>100],
        [['tanggal_masuk'],'safe'],
        ];
    }
    public function attributeLabels(){
        return [
        "id"=>"ID",
        "nip"=>"NIP",
        "nama"=>"Nama Guru",
        "tanggal_masuk"=>"Tanggal Masuk",
        "alamat"=>"Alamat",
        "file"=>"Logo",
        "jk"=>"Jenis Kelamin",
        "jabatan"=>"Jabatan",



        ];
    }
}
?>