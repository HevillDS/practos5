<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Iphone */

$this->title = 'Update Iphone: ' . $model->iphone_id;
$this->params['breadcrumbs'][] = ['label' => 'Iphones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iphone_id, 'url' => ['view', 'id' => $model->iphone_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="iphone-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
