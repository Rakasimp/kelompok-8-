<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PenggunaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengguna-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Id_pengguna') ?>

    <?= $form->field($model, 'Nama_pengguna') ?>

    <?= $form->field($model, 'Jabatan_pengguna') ?>

    <?= $form->field($model, 'Alamat_pengguna') ?>

    <?= $form->field($model, 'No_telp_pengguna') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
