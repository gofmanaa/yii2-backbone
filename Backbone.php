<?php
/**
 * Created by PhpStorm.
 * User: bigdrop
 * Date: 05.07.16
 * Time: 12:32
 */

namespace gofmanaa\backbone;


use yii\web\AssetBundle;

class Backbone extends AssetBundle
{

    public $sourcePath = '@bower';

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();
        $this->js = [
            YII_DEBUG?'underscore/underscore.js':'underscore/underscore-min.js',
            YII_DEBUG?'backbone/backbone.js':'backbone/backbone-min.js'
            ];
    }


}