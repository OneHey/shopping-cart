<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\store\ProductCategory */

$this->title = 'Tạo Mới Danh Mục Sản Phẩm';
$this->params['breadcrumbs'][] = ['label' => 'Danh Mục Sản Phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-category-create">
    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
