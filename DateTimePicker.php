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
    /** @var array */
    public $clientOptions = [];

    public $showInputIcon  = true;
    public $inputIconClass = 'glyphicon glyphicon-calendar';
    public $inputGroupOptions = [
        'class' => 'date'
    ];

    public function init()
    {
        parent::init();
        $this->initOptions();
        MomentAsset::register($this->getView());
        DateTimePickerAsset::register($this->getView());

    }

    public function run()
    {
       $id = $this->getId();
        // render input
        $this->inputGroupOptions['id']  = $id;
        if($this->showInputIcon){
            Html::addCssClass($this->inputGroupOptions,['input-group']);
        }


        echo Html::beginTag('div',$this->inputGroupOptions);

        $inline = ArrayHelper::getValue($this->clientOptions,'inline',false);
        $isModel = $this->hasModel();
        
        if(!$isModel && $this->value === null ){
            $this->value = \Yii::$app->request->get($this->name);
        }

        if(!$inline)
            echo $isModel
                ? Html::activeTextInput($this->model, $this->attribute, $this->options)
                : Html::textInput($this->name, $this->value,$this->options);

        if($inline)
            echo $isModel
                ? Html::activeHiddenInput($this->model, $this->attribute, $this->options)
                : Html::hiddenInput($this->name, $this->value,$this->options);

        echo $this->showInputIcon ? Html::tag('span','<span class="'.$this->inputIconClass.'"></span> ',['class' => 'input-group-addon']) : '';
        echo Html::endTag('div');

        $clientOptions = empty($this->clientOptions) ? '{}'  : Json::encode($this->clientOptions);
        $idClass = !$this->showInputIcon? ' .datetimepicker'  : '';


        $jsCode ="$('#{$id}{$idClass}').datetimepicker({$clientOptions}).data('DateTimePicker').show().hide()";

        $this->getView()->registerJs($jsCode);

    }


    private function initOptions()
    {
        Html::addCssClass($this->options,'datetimepicker form-control');
    }

}