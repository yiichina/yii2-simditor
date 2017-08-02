<?php

namespace yiichina\simditor;

use yii\Helpers\Html;

/**
 * This is just an example.
 */
class Simditor extends \yii\widgets\InputWidget
{
    public function init()
    {
        parent::init();
        $view = $this->getView();
        SimditorAsset::register($view);
        $view->registerJs("var editor = new Simditor({
          textarea: $(\"#{$this->options['id']}\")
          //optional options
        });");
    }

    public function run()
    {
        if($this->hasModel()) {
            return Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            return Html::textarea($this->name, $this->value, $this->options);
        }
    }
}
