<?php

use yii\helpers\Html;
$this->title = 'Perbarui Data Guru: ' . ' ' . $model->nama;
$this->params['breadcrumbs'][]= ['label'=>'Pusat Data Guru','url'=>['index']];
$this->params['breadcrumbs'][]= ['label'=> $model->nama,'url'=>['view','id'=>$model->id]];
$this->params['breadcrumbs'][]= $this->title;
?>
<div class="guru-update">
	<h1><?= Html::encode($this->title)?></h1>
	<?= $this->render('form',[
		'model'=>$model,
		])?>
		</div>