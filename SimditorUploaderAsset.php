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
class SimditorUploaderAsset extends AssetBundle
{
    public $sourcePath = '@bower/simple-uploader';

    public $js = [
        'lib/uploader.js',
    ];
}