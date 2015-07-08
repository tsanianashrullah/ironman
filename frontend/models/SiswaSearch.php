<?php
namespace frontend\models;

use yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Siswa;

class SiswaSearch extends Siswa
{
	public function rules()
	{
		return[
		[['nisn'],'integer'],
		[['nama','alamat','jk','telp','kelas'],'safe'],
		];
	}
    public function scenarios()
    {
        return Model::scenarios();
    }
	public function search($params){
		$query= Siswa::find();
		$dataProvider= new ActiveDataProvider([
			'query'=>$query,
		]);
		$this->load($params);
		if(!$this->validate()){
			return $dataProvider;
		}
		$query->andFilterWhere([
			'id'=>$this->id,
		]);
		$query->andFilterWhere(['like','nisn',$this->nisn])
			->andFilterWhere(['like','nama',$this->nama])
			->andFilterWhere(['like','tanggal_lahir',$this->tanggal_lahir])
			->andFilterWhere(['like','alamat',$this->alamat])
			->andFilterWhere(['like','jk',$this->jk])
			->andFilterWhere(['like','telp',$this->telp])
			->andFilterWhere(['like','kelas',$this->kelas]);
		return $dataProvider;
	}
}