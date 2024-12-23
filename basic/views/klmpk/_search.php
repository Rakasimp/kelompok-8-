<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\KlmpkSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="klmpk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Id_pengelompokkan') ?>

    <?= $form->field($model, 'Kode_Menu') ?>

    <?= $form->field($model, 'Jenis_Menu') ?>

    <?= $form->field($model, 'Nama_menu') ?>

    <?= $form->field($model, 'Harga_menu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
