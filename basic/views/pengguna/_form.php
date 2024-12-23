<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\pengguna $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengguna-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_pengguna')->textInput() ?>

    <?= $form->field($model, 'Nama_pengguna')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jabatan_pengguna')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat_pengguna')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'No_telp_pengguna')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
