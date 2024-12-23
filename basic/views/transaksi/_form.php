<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\transaksi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Kode_transaksi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tanggal_transaksi')->textInput() ?>

    <?= $form->field($model, 'Kode_Menu')->textInput() ?>

    <?= $form->field($model, 'Id_pelanggan')->textInput() ?>

    <?= $form->field($model, 'Nama_pelanggan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nama_Menu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jumlah_item')->textInput() ?>

    <?= $form->field($model, 'Harga_Menu')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
