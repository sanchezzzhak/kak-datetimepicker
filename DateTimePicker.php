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

    public $showInputIcon  = true;
    public $inputIconClass = 'glyphicon glyphicon-calendar';

    public function init()
    {
        parent::init();
        $this->initOptions();
        DateTimePickerAsset::register($this->getView());
    }

    public function run()
    {
        // render input
        echo Html::beginTag('div',['class'=>'input-group date']);
        echo $this->hasModel()
            ? Html::activeTextInput($this->model, $this->attribute, $this->options)
            : Html::textInput($this->name, $this->value,$this->options);

        echo $this->showInputIcon ? Html::tag('span','<span class="'.$this->inputIconClass.'"></span> ',['class' => 'input-group-addon']) : '';

        echo Html::endTag('div');
    }


    private function initOptions()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        Html::addCssClass($this->options,'datetimepicker form-control');
    }

}