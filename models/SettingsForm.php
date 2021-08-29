<?php

namespace panix\mod\disqus\models;

use Yii;
use panix\engine\SettingsModel;
use yii\helpers\ArrayHelper;

/**
 * Class SettingsForm
 * @package panix\mod\disqus\models
 */
class SettingsForm extends SettingsModel
{

    public static $category = 'disqus';
    protected $module = 'disqus';

    public $api_key;
    public $api_secret;
    public $domain;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['domain'], "required"],
            [['api_secret', 'api_key'], "string"],
        ];
    }

    /**
     * Настройки по умолчанию
     * @return array
     */
    public static function defaultSettings()
    {
        return [
            'api_secret' => null,
            'api_key' => null,
            'domain' => null,
        ];
    }


}
