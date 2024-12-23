<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\klmpk $model */

$this->title = 'Create Klmpk';
$this->params['breadcrumbs'][] = ['label' => 'Klmpks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klmpk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
