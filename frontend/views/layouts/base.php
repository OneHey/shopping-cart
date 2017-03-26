<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/_clear.php')
?>
    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-static-top',
            ],
        ]); ?>
        <?php echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => Yii::t('frontend', 'Home'), 'url' => ['/site/index']],
                ['label' => Yii::t('frontend', 'Thông Tin'), 'url' => ['/page/view', 'slug' => 'about']],
                ['label' => Yii::t('frontend', 'Articles'), 'url' => ['/article/index']],
                ['label' => Yii::t('frontend', 'Danh Mục Sản Phẩm'), 'url' => ['backend/product-category']],
                ['label' => Yii::t('frontend', 'Sản Phẩm'), 'url' => ['backend/sanpham']],
                ['label' => Yii::t('frontend', 'Contact'), 'url' => ['/site/contact']],
                ['label' => Yii::t('frontend', 'Signup'), 'url' => ['/user/sign-in/signup'], 'visible' => Yii::$app->user->isGuest],
                ['label' => Yii::t('frontend', 'Login'), 'url' => ['/user/sign-in/login'], 'visible' => Yii::$app->user->isGuest],
                [
                    'label' => Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->getPublicIdentity(),
                    'visible' => !Yii::$app->user->isGuest,
                    'items' => [
                        [
                            'label' => Yii::t('frontend', 'Settings'),
                            'url' => ['/user/default/index']
                        ],
                        [
                            'label' => Yii::t('frontend', 'Backend'),
                            'url' => Yii::getAlias('@backendUrl'),
                            'visible' => Yii::$app->user->can('manager')
                        ],
                        [
                            'label' => Yii::t('frontend', 'Logout'),
                            'url' => ['/user/sign-in/logout'],
                            'linkOptions' => ['data-method' => 'post']
                        ]
                    ]
                ],
                [
                    'label' => Yii::t('frontend', 'Language'),
                    'items' => array_map(function ($code) {
                        return [
                            'label' => Yii::$app->params['availableLocales'][$code],
                            'url' => ['/site/set-locale', 'locale' => $code],
                            'active' => Yii::$app->language === $code
                        ];
                    }, array_keys(Yii::$app->params['availableLocales']))
                ]
            ]
        ]); ?>
        <?php NavBar::end(); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 aside-left bg-success" style="padding-top: 10px">
                    <div class="panel panel-danger  ">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo Html::a('Trang Chủ', 'index.php', ['btn btn-link']) ?></h3>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item"><?php echo Html::a('<span class="glyphicon glyphicon-th-list"> Danh Mục</span>', 'backend/product-category', ['btn btn-link']) ?></li>
                                <li class="list-group-item"><?php echo Html::a('<span class="glyphicon glyphicon-plus-sign"> Sản Phẩm</span>', 'backend/sanpham', ['btn btn-link']) ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 admin-right">
                    <?php echo $content ?>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?php echo date('Y') ?></p>
            <p class="pull-right"><?php echo Yii::powered() ?></p>
        </div>
    </footer>
<?php $this->endContent() ?>