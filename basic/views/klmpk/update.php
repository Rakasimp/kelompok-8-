<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\klmpk $model */

$this->title = 'Update Klmpk: ' . $model->Id_pengelompokkan;
$this->params['breadcrumbs'][] = ['label' => 'Klmpks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_pengelompokkan, 'url' => ['view', 'Id_pengelompokkan' => $model->Id_pengelompokkan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="klmpk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
