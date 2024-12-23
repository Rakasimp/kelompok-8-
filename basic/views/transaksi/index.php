<?php

use app\models\transaksi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TransaksiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Transaksis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transaksi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Kode_transaksi',
            'Tanggal_transaksi',
            'Kode_Menu',
            'Id_pelanggan',
            'Nama_pelanggan',
            //'Nama_Menu',
            //'Jumlah_item',
            //'Harga_Menu',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, transaksi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Kode_transaksi' => $model->Kode_transaksi]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
