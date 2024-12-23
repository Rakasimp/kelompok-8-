<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\klmpk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="klmpk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_pengelompokkan')->textInput() ?>

    <?= $form->field($model, 'Kode_Menu')->textInput() ?>

    <?= $form->field($model, 'Jenis_Menu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nama_menu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Harga_menu')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
