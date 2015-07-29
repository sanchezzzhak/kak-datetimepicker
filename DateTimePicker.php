<?php

namespace kak\widgets\datetimepicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\Json;


class DateTimePicker extends \yii\widgets\InputWidget
{
    /**
     * @var array the HTML attributes for the widget container tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];



    public function init()
    {
        $this->initOptions();
    }

    public function run()
    {
        echo Html::endTag('div');
        echo Html::endTag('div');
    }


    private function initOptions()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }

}