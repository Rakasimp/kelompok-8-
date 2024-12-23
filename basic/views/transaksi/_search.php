<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TransaksiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Kode_transaksi') ?>

    <?= $form->field($model, 'Tanggal_transaksi') ?>

    <?= $form->field($model, 'Kode_Menu') ?>

    <?= $form->field($model, 'Id_pelanggan') ?>

    <?= $form->field($model, 'Nama_pelanggan') ?>

    <?php // echo $form->field($model, 'Nama_Menu') ?>

    <?php // echo $form->field($model, 'Jumlah_item') ?>

    <?php // echo $form->field($model, 'Harga_Menu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
