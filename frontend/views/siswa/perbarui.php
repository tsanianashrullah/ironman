<?php
use yii\helpers\Html;
$this->title = 'Update Data Siswa : ' . ' ' . $model->nama;
$this->params['breadcrumbs'][]=['label'=>'Pusat Data Siswa','url'=>['index']];
$this->params['breadcrumbs'][]=['label'=>'Detail','url'=>['view','id'=>$model->id]];
$this->params['breadcrumbs'][]='Perbarui Data';
?>
<div class='siswa-update'>
	<h1><?=Html::encode($this->title) ?> </h1>
	<?= $this->render('form',[
		'model'=>$model,
		]) ?>
	</div>