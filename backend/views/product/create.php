<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\store\Products */

$this->title = 'Create Products';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-create">

    <?php echo $this->render('_form', [
        'model' => $model,
        'categories'=>$categories,
    ]) ?>

</div>
