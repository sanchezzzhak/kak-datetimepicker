<?php
namespace kak\widgets\datetimepicker;

use yii\web\AssetBundle;

class MomentAsset extends AssetBundle
{
    public $sourcePath = '@bower/moment/min';
    public $depends = [
        'yii\web\JqueryAsset'
    ];
    public $js = [
        'moment.min.js',
        'locales.min.js'
    ];
} 