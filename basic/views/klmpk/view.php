<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\klmpk $model */

$this->title = $model->Id_pengelompokkan;
$this->params['breadcrumbs'][] = ['label' => 'Klmpks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="klmpk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_pengelompokkan' => $model->Id_pengelompokkan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_pengelompokkan' => $model->Id_pengelompokkan], [
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
            'Id_pengelompokkan',
            'Kode_Menu',
            'Jenis_Menu',
            'Nama_menu',
            'Harga_menu',
        ],
    ]) ?>

</div>
