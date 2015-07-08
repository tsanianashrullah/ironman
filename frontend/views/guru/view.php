<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\components\CustomPagination;
$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Pusat Data Guru SMK', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;?>
<div class="guru-view">
	<h1><?= Html::encode($this->title)?></h1>?>
	<p>
		<?= Html::a('Perbarui',['perbarui','id'=> $model->id],['class'=>'btn btn-primary']) ?>
		<?= Html::a('Hapus',['delete','id'=>$model->id],[
			'class'=>'btn btn-danger',
			'data' =>[
				'confirm'=>'Anda Yakin ?',
				'method'=>'post',
				],
			]) ?>
		</p>
	<?= DetailView::widget([
		'model'=>$model,
		'attributes'=>[
		'id',
		'nip',
		'nama',
		'tanggal_masuk',
		'alamat',
		'jk',
		'jabatan',
		],
		]) ?>


	    </div>
	</div>