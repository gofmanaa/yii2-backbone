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

    public $js = [
        'underscore/underscore.js',
        'backbone/backbone.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();
        $this->js = [
                'underscore/underscore.js',
                'backbone/backbone.js'
            ];
    }


}