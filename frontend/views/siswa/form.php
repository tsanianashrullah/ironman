<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\Datepicker;
?>

<div class="karyawan-form">
	<?php $apedah=ActiveForm::begin()?>
	<?= $apedah->field($model, 'nisn')->textInput(['maxlength'=>true]) ?>
	<?= $apedah->field($model, 'nama')->textInput(['maxlength'=>true]) ?>
	<?= $apedah->field($model, 'tanggal_lahir')->widget(
	    DatePicker::className(), [
	        // inline too, not bad
	         'inline' => false, 
	         // modify template for custom rendering
	        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
	        'clientOptions' => [
	            'autoclose' => true,
	            'format' => 'yyyy-mm-dd'
	        ]
	]);?>
	<?= $apedah->field($model, 'alamat')->textArea(['row'=>5]) ?>
    <?= $apedah->field($model, 'jk')->dropDownList(['Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'],['prompt'=>'Pilih Gender']
); ?>
	<?= $apedah->field($model, 'telp')->textInput(['maxlength'=>true]) ?>
    <?= $apedah->field($model, 'kelas')->dropDownList(['X'=>'X','XI'=>'XI','XII'=>'XII'],['prompt'=>'Pilih Kelas']
); ?>
	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord? 'Tambah':'Perbarui',['class'=>$model->isNewRecord? 'btn btn-success':'btn btn-primary']) ?>
	</div>
	<?php ActiveForm::end(); ?>


	</div>