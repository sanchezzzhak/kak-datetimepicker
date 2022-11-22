<?php
namespace kak\widgets\datetimepicker;

use yii\web\AssetBundle;

class DateTimePickerAsset extends AssetBundle
{
    public $sourcePath = '@npm/eonasdan-bootstrap-datetimepicker/build';
    public $depends = [
        'yii\web\JqueryAsset'
    ];
    public $js = [
        'js/bootstrap-datetimepicker.min.js'
    ];
    public $css = [
        'css/bootstrap-datetimepicker.min.css'
    ];
} 
