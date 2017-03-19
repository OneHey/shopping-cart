<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\store\Products */

$this->title = 'Update Products: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="products-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
