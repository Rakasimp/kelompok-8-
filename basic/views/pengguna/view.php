<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\pengguna $model */

$this->title = $model->Id_pengguna;
$this->params['breadcrumbs'][] = ['label' => 'Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pengguna-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_pengguna' => $model->Id_pengguna], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_pengguna' => $model->Id_pengguna], [
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
            'Id_pengguna',
            'Nama_pengguna',
            'Jabatan_pengguna',
            'Alamat_pengguna',
            'No_telp_pengguna',
        ],
    ]) ?>

</div>
