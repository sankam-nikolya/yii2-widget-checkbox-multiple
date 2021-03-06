<?php
namespace diiimonn\widgets;

use yii\web\AssetBundle;

/**
 * Class CheckboxMultipleAsset
 * @package diiimonn\widgets
 */
class CheckboxMultipleAsset extends AssetBundle
{
    public $sourcePath = '@vendor/diiimonn/yii2-widget-checkbox-multiple/assets';

    public $js = [
        'js/checkbox.multiple.js'
    ];

    public $css = [
        'css/checkbox.multiple.css'
    ];
}
