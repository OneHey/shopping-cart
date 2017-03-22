<?php
/**
 * @author Eugene Terentev <eugene@terentev.net>
 */
return [
    'class'=>'yii\web\UrlManager',
    'enablePrettyUrl'=>true,
    'showScriptName'=>false,
    'rules'=> [
        'about'=>'page/about',
        'trang-chu'=>'site/index',
        ['pattern'=>'cache/<path:(.*)>', 'route'=>'glide/index', 'encodeParams' => false]
    ]
];
