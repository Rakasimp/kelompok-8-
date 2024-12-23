<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\transaksi $model */

$this->title = 'Update Transaksi: ' . $model->Kode_transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Kode_transaksi, 'url' => ['view', 'Kode_transaksi' => $model->Kode_transaksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
