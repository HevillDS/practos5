<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IphoneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Iphones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iphone-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Iphone', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'iphone_id',
            'model',
            'description:ntext',
            'rating',
            'shop_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
