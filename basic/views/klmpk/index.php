<?php

use app\models\klmpk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\KlmpkSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Klmpks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klmpk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Klmpk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_pengelompokkan',
            'Kode_Menu',
            'Jenis_Menu',
            'Nama_menu',
            'Harga_menu',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, klmpk $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_pengelompokkan' => $model->Id_pengelompokkan]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
