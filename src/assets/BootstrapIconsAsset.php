<?php

namespace yii\BootstrapIcons\assets;

use yii\web\AssetBundle;

class BootstrapIconsAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/dist';
    public $css = [
        'css/bootstrap-icons.min.css',
    ];

    public $publishOptions = [
        'only' => [
            'css/*',
            'webfonts/*',
        ],
    ];
}