<?php

namespace wadeshuler\sliderrevolution;

/**
 * Class SliderAsset
 */
class SliderAsset extends \yii\web\AssetBundle
{
    public $sourcePath;

    public $css = [
        'css/settings.css',
    ];
    public $js = [
        'js/jquery.themepunch.tools.min.js',
        'js/jquery.themepunch.revolution.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $publishOptions = [
        'forceCopy' => true,
    ];

    public function init()
    {
        $module = \Yii::$app->getModule('sliderrevolution');
        $this->sourcePath = $module->getPluginLocation();
        parent::init();
    }
}
