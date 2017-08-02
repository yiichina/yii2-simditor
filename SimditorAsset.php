<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yiichina\simditor;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the javascript files for client validation.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SimditorAsset extends AssetBundle
{
    public $sourcePath = '@bower/simditor';

    public $css = [
        'styles/simditor.css',
    ];

    public $js = [
        'lib/simditor.js',
    ];

    public $depends = array(
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yiichina\simditor\SimditorModuleAsset',
        'yiichina\simditor\SimditorHotkeysAsset',
        'yiichina\simditor\SimditorUploaderAsset',
    );
}