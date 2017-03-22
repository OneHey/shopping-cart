<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\store\ProductCategory;

/* @var $this yii\web\View */
/* @var $searchModel common\models\store\ProductCategorySerach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-category-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Product Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'status',
            'created_at:datetime',
            'updated_at:datetime',
            'created_by',
            [
                'attribute' => 'created_by',
                'content' => function ($model) {
                    $created_by = ProductCategory::find()->where(['name' => $model->created_by])->one();
                    if($created_by){
                        return $created_by=$model->status;
                    }
                },

//                'format' => 'raw',
//                'value' => function ($model) {
//                    return isset($model->created) ? $model->created->username : ' ';
//                },
            ],
            'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
