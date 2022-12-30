# kak-datetimepicker
Yii widget bootstrap DateTimePicker
=====================
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run
```
php composer.phar require --prefer-dist kak/datetimepicker "*"
```

or add

```
"kak/datetimepicker": "*"
```

to the require section of your `composer.json` file.


Usage
-----
```php
    use kak\widgets\datetimepicker\DateTimePicker;
?>
...
<?=$form->field($model,'dateIn')->widget(DateTimePicker::className(),[
     'locale' => 'ru',
     'format' => 'DD.MM.YYYY',
     'showInputIcon' => false
])?>
```
Or
```php
 <?=DateTimePicker::widget([
    'name' => 'dateIn',
    'clientOptions' => [
        'locale' => 'ru'
    ]
]);?>
```

full docs https://getdatepicker.com/4/Options/ for clientOptions
