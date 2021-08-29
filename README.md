# mod-pages

Module for PIXELION CMS

[![Latest Stable Version](https://poser.pugx.org/panix/mod-disqus/v/stable)](https://packagist.org/packages/panix/mod-disqus)
[![Total Downloads](https://poser.pugx.org/panix/mod-disqus/downloads)](https://packagist.org/packages/panix/mod-disqus)
[![Monthly Downloads](https://poser.pugx.org/panix/mod-disqus/d/monthly)](https://packagist.org/packages/panix/mod-disqus)
[![Daily Downloads](https://poser.pugx.org/panix/mod-disqus/d/daily)](https://packagist.org/packages/panix/mod-disqus)
[![Latest Unstable Version](https://poser.pugx.org/panix/mod-disqus/v/unstable)](https://packagist.org/packages/panix/mod-disqus)
[![License](https://poser.pugx.org/panix/mod-disqus/license)](https://packagist.org/packages/panix/mod-disqus)


## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

#### Either run

```
php composer require --prefer-dist panix/mod-disqus "*"
```

or add

```
"panix/mod-disqus": "*"
```

to the require section of your `composer.json` file.


#### Add to web config.
```
    'modules' => [
        'disqus' => ['class' => 'panix\mod\disqus\Module'],
    ],
```
#### Usage
##### Run widget
```
echo \panix\mod\disqus\DisqusWidget::widget([
    'id' => '', //require
    'url' => '', //require
    'domain' => '', //require if not usage module settings
]);
```

##### Run counter
```
echo Html::a('','<URL>#disqus_thread',[
    'data-disqus-identifier' => '<ID>', //require
    'class' => 'disqus-comment-count'
]);

```
