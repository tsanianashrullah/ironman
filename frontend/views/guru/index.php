<?php

use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use yii\widgets\LinkPager;
use dosamigos\tableexport\ButtonTableExport;
$this->title = 'Pusat Data Guru SMK';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Data', ['buat'], ['class' => 'btn btn-success']) ?>

    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,  
        'columns' => [

            ['class' => 'yii\grid\SerialColumn'],

            'nip',
            'nama',
            'tanggal_masuk',/*[

			'attribute'=>'tanggal_masuk',
			'value'=>'tanggal_masuk',
			//'format'=>'raw',
			
			'filter'=> Datepicker::widget([
				'model'=> $searchModel,
				'attribute'=>'tanggal_masuk',
				'clientOptions'=> [
					'autoClose'=> true,
					'format'=>'yyyy-mm-dd']
				])

			],*/
            'alamat',
            'logo',
            'jk',
            'jabatan',

            ['class' => 'yii\grid\ActionColumn'],
        
        ],
    ]); ?>
    
<?= LinkPager::widget(['pagination' => $pagination]) ?>


</div>
