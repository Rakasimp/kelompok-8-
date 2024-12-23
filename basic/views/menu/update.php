<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\menu $model */

$this->title = 'Update Menu: ' . $model->Kode_Menu;
$this->params['breadcrumbs'][] = ['label' => 'Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Kode_Menu, 'url' => ['view', 'Kode_Menu' => $model->Kode_Menu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
