<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\store\ProductCategory;

/* @var $this yii\web\View */
/* @var $searchModel common\models\store\ProductCategorySerach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$title = 'Danh Mục Sản Phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-category-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $title;?></h3>
        </div>
        <div class="panel-body">
            <p class="pull-right"><?php echo Html::a('Thêm Mới Danh Mục Sản Phẩm', ['create'], ['class' => 'btn btn-sm btn-success']) ?></p>
            <?php echo GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
//            ['class' => 'yii\grid\SerialColumn',
//                'header' => 'STT',
//                'headerOptions' => [
//                    'style' => 'width:50px; text-align:center',
//                ],
//                'contentOptions' => [
//                    'style' => 'width:50px; text-align:center',
//                ],
//            ],
                    ['class' => 'yii\grid\CheckboxColumn',
//                'header' => 'Check',
                        'headerOptions' => [
                            'style' => 'width:10px; text-align:center',
                        ],
                        'contentOptions' => [
                            'style' => 'width:100px; text-align:center',
                        ],
                    ],
                    ['attribute' => 'id',
                        'label' => 'ID',
                        'headerOptions' => [
                            'style' => 'width:80px; text-align:center',
                        ],
                        'contentOptions' => [
                            'style' => 'width:80px; text-align:center',
                        ],
                    ],
                    [
                        'attribute' => 'name',
                        'headerOptions' => [
                            'style' => 'width:50px; text-align:center',
                        ],
                        'contentOptions' => [
                            'style' => 'width:50px; text-align:center',
                        ],
                    ],
                    [
                        'attribute' => 'status',
                        'content' => function ($model) {
                            if ($model->status == 0) {
                                return '<span class="label label-danger">No Active</span>';
                            } else {
                                return '<span class="label label-success">Actived</span>';
                            }
                        },
                        'headerOptions' => [
                            'style' => 'width:100px; text-align:center',
                        ],
                        'contentOptions' => [
                            'style' => 'width:80px; text-align:center',
                        ],
                    ],
                    'created_at:datetime',
                    'updated_at:datetime',
                    //           'created_by',
                    [
                        'attribute' => 'created_by',
                        'content' => function ($model) {
                            $created_by = ProductCategory::find()->where(['name' => $model->created_by])->one();
                            if ($created_by) {
                                return $created_by->status;
                            }
                        },
                    ],
                    'updated_by:datetime',

                    ['class' => 'yii\grid\ActionColumn',
                        'buttons' => [
                            'view' => function ($url) {
                                return Html::a('Xem', $url, ['class' => 'btn btn-xs btn-primary']);
                            },
                            'update' => function ($url) {
                                return Html::a('Cập Nhật', $url, ['class' => 'btn btn-xs btn-success']);
                            },
                            'delete' => function ($url, $model) {
                                return Html::a('Xóa', $url, [
                                    'class' => 'btn btn-xs btn-danger',
                                    'data-confirm' => 'Bạn có chắc muốn xóa không?' . $model->name,
                                    'data-method' => 'post',
                                ]);
                            }
                        ],

                        'headerOptions' => [
                            'style' => 'width:160px; text-align:center',
                        ],
                        'contentOptions' => [
                            'style' => 'width:160px; text-align:center',
                        ],
                    ],
                ],
            ]); ?>

        </div>
    </div>

</div>
