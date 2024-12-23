<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\kategori $model */

$this->title = 'Update Kategori: ' . $model->Jenis_Menu;
$this->params['breadcrumbs'][] = ['label' => 'Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Jenis_Menu, 'url' => ['view', 'Jenis_Menu' => $model->Jenis_Menu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
