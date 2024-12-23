<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\menu $model */

$this->title = $model->Kode_Menu;
$this->params['breadcrumbs'][] = ['label' => 'Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="menu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Kode_Menu' => $model->Kode_Menu], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Kode_Menu' => $model->Kode_Menu], [
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
            'Kode_Menu',
            'Nama_Menu',
            'Harga_Menu',
        ],
    ]) ?>

</div>
