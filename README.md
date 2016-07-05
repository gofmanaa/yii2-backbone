Yii2 backbone js
================
yii2 backbone asset

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist gofmanaa/yii2-backbone "*"
```

or add

```
"gofmanaa/yii2-backbone": "*"
```

to the require section of your `composer.json` file.


Usage
-----
```
    public $depends = [
        'gofmanaa\backbone\Backbone',
    ];
```
or

```
    \gofmanaa\backbone\Backbone::register($this);
```