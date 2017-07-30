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
    }

    public static function show($name, $framework = 'glyphicon', $options = [])
    {
        new self();
        $class = $framework . ' ' . $framework . '-' . $name;
        $options['class'] = empty($options['class']) ? $class : $class . ' ' . $options['class'];
        return Html::tag('span', null, $options) . ' ';
    }
}
