<?php
use yii\helpers\Html;
$this->title = 'Tambah Data Siswa';
$this->params['breadcrumbs'][]= ['label'=>'Pusat Data Siswa', 'url'=>['index']];
$this->params['breadcrumbs'][]= $this->title;
?>
<div class="siswa-create">
	<h1> <?= Html::encode($this->title) ?> </h1>
	<?= $this->render('form',[
		'model'=>$model,
		]) ?>
	</div>
	