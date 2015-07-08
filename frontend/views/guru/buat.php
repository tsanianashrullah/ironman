<?php
use yii\helpers\Html;

$this->title='Tambah Data Guru';
$this->params['breadcrumbs'][]= ['label'=> 'Pusat Data Guru SMK','url'=>['index']];
$this->params['breadcrumbs'][]= $this->title;
?>
<div class='karyawan-create'>
	<h1><?= Html::encode($this->title) ?> </h1>
	<?= $this->render('form',[
		'model' => $model,
		])
?>
</div>
