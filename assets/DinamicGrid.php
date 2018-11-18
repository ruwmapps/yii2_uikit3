<?php

namespace wm-apps\yii2_uikit3\assets;

use yii\web\AssetBundle;

class DinamicGrid extends AssetBundle
{
    public $sourcePath = '@wm-apps/yii2_uikit3/uikit';

    public $css = [];

    public $js = [];

    public $depends = [
        'wm-apps\yii2_uikit3\UikitAsset',
    ];
}