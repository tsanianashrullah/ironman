<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Pusat Data Siswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guru-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Perbarui', ['perbarui', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Anda yakin menghapus data ini ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nisn',
            'nama',
            'tanggal_lahir',
            'alamat',
            'jk',
            'telp',
            'kelas',
        ],
    ]) ?>

</div>