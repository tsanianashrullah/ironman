<?php
use yii\helpers\Html;
use yii\grid\GridView;
use frontend\models\Karyawan;
use dosamigos\datepicker\DatePicker;
$this->title='Pusat Data Siswa SMK';
$this->params['breadcrumbs'][]=$this->title;
?>
<div class="karyawan-index">
	<h1> <?= Html::encode($this->title) ?> </h1>
	<p> <?= Html::a('Tambah Data Siswa',['nambah'],['class'=>'btn btn-success'])?></p>
	<?= GridView::widget([
		'dataProvider'=>$dataProvider,
		'filterModel'=>$searchModel,
		'columns'=>[
            ['class'=>'yii\grid\SerialColumn'],
			'nisn',
			'nama',[

            'attribute'=>'tanggal_lahir',
            'value'=>'tanggal_lahir',
            //'format'=>'raw',
            'filter'=> Datepicker::widget([
                'model'=> $searchModel,
                'attribute'=>'tanggal_lahir',
                'clientOptions'=> [
                    'autoClose'=> true,
                    'format'=>'yyyy-mm-dd']
                ])

            ],
            'alamat',
            'jk',
            'telp',
            'kelas',
            ['class' => 'yii\grid\ActionColumn'],
			],
		]);
	?>
</div>