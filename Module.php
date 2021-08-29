<?php

namespace panix\mod\disqus;

use Yii;
use panix\engine\WebModule;
use yii\base\BootstrapInterface;

class Module extends WebModule implements BootstrapInterface
{

    public $icon = 'edit';

    public function getAdminMenu()
    {
        return [
            'modules' => [
                'items' => [
                    [
                        'label' => Yii::t('disqus/default', 'MODULE_NAME'),
                        'url' => ['/admin/disqus'],
                        'icon' => $this->icon,
                        'visible' => Yii::$app->user->can('/disqus/admin/default/index') || Yii::$app->user->can('/disqus/admin/default/*')
                    ],
                ],
            ],
        ];
    }


    public function getInfo()
    {
        return [
            'label' => Yii::t('disqus/default', 'MODULE_NAME'),
            'author' => 'dev@pixelion.com.ua',
            'version' => '1.0',
            'icon' => $this->icon,
            'description' => Yii::t('disqus/default', 'MODULE_DESC'),
            'url' => ['/admin/disqus'],
        ];
    }

}
