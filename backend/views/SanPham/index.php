<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\store\TimSanpham */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sanpham';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanpham-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sanpham', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'CategoryId',
            'Des:ntext',
            'img_url:url',
            // 'img_path',
            // 'status',
             'created_at:datetime',
             'updated_at:datetime',
            // 'created_by',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
