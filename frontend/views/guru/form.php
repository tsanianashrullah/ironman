<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'tanggal_masuk')->widget(
	    DatePicker::className(), [
	         'inline' => false, 
	        'clientOptions' => [
	            'autoclose' => true,
	            'format' => 'yyyy-mm-dd'
	        ]
	]);?>

    <?= $form->field($model, 'alamat')->textArea(['row'=>5]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'jk')->dropDownList(['Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'],['prompt'=>'Pilih Jenis Kelamin']
); ?>
   
    <?= $form->field($model, 'jabatan')->dropDownList(['Kepala Sekolah'=>'Kepala Sekolah','Sekretaris'=>'Sekretaris','Bendahara'=>'Bendahara','Staff Pengajar'=>'Staff Pengajar','Staff Tata Usaha'=>'Staff Tata Usaha'],['prompt'=>'Pilih Jabatan']	
); ?>	

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
