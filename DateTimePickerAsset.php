<?php
namespace kak\widgets\datetimepicker;

use yii\web\AssetBundle;

class DateTimePickerAsset extends AssetBundle
{
    public $sourcePath = '@bower/eonasdan-bootstrap-datetimepicker';
    public $depends = [
        'yii\web\JqueryAsset'
    ];
    public $js = [
        'js/bootstrap-datetimepicker.min.css'
    ];
    public $css = [
        'js/bootstrap-datetimepicker.min.js'
    ];
    public function init()
    {
        parent::init();
    }
} 