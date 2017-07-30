<?php

namespace yiichina\simditor;

use yii\Helpers\Html;

/**
 * This is just an example.
 */
class Simditor extends \yii\base\Widget
{
    public function init()
    {
        $view = $this->getView();
        SimditorAsset::register($view);
		$view->registerJs('CKEDITOR.replace("editor")');
    }

    public function run()
    {
        return Html::activeTextarea($this->model, $this->attribute);
    }
}
