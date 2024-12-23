<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\transaksi $model */

$this->title = $model->Kode_transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="transaksi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Kode_transaksi' => $model->Kode_transaksi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Kode_transaksi' => $model->Kode_transaksi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Kode_transaksi',
            'Tanggal_transaksi',
            'Kode_Menu',
            'Id_pelanggan',
            'Nama_pelanggan',
            'Nama_Menu',
            'Jumlah_item',
            'Harga_Menu',
        ],
    ]) ?>

</div>
