<?php

use app\models\menu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\MenuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Kode_Menu',
            'Nama_Menu',
            'Harga_Menu',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, menu $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Kode_Menu' => $model->Kode_Menu]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
