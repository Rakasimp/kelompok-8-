<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\pengguna $model */

$this->title = 'Update Pengguna: ' . $model->Id_pengguna;
$this->params['breadcrumbs'][] = ['label' => 'Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_pengguna, 'url' => ['view', 'Id_pengguna' => $model->Id_pengguna]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengguna-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
