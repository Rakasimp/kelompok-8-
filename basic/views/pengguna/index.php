<?php

use app\models\pengguna;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\PenggunaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penggunas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengguna-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengguna', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_pengguna',
            'Nama_pengguna',
            'Jabatan_pengguna',
            'Alamat_pengguna',
            'No_telp_pengguna',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, pengguna $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_pengguna' => $model->Id_pengguna]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
