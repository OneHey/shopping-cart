<?php
return [
    'class'=>'yii\web\UrlManager',
    'enablePrettyUrl'=>true,
    'showScriptName'=>false,
    //chỉnh sửa định tuyến
    'rules'=> [

        // Pages
        ['pattern'=>'page/<slug>', 'route'=>'page/view'],

        // Articles
//        ['pattern'=>'article/index', 'route'=>'article/index'],
//        ['pattern'=>'article/attachment-download', 'route'=>'article/attachment-download'],
        ['pattern'=>'article/<slug>', 'route'=>'article/view'],
//        'about'=>'page/about',
        'trang-Chu'=>'site/index',
        'lien-he'=>'site/contact',
        'bai-viet'=>'article/index',
    ]
];
