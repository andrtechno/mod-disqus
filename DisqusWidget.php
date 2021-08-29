<?php

namespace panix\mod\disqus;

use panix\engine\CMS;
use panix\mod\shop\models\Attribute;
use panix\mod\shop\models\traits\EavQueryTrait;
use yii\caching\DbDependency;
use yii\db\ActiveQuery;
use yii\helpers\Html;
use Yii;
use panix\mod\shop\models\Category;
use panix\mod\shop\models\Product;
use panix\mod\shop\models\Brand;
use panix\engine\data\Widget;

/**
 * Class DisqusWidget
 * @package panix\mod\disqus\widgets\comment
 */
class DisqusWidget extends Widget
{
    public $url;
    public $id;
    public $domain;
    public function init()
    {
        $view = $this->getView();


        if(!$this->domain){
            $this->domain = Yii::$app->settings->get('disqus','domain');
        }

        if (!empty($this->domain)) {

            $view->registerJsFile("//{$this->domain}.disqus.com/count.js", ['async'=>'async','id'=>'dsq-count-scr','position' => $view::POS_END]);
            $view->registerJs("
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
    */
    
    var disqus_config = function () {
    this.page.url = '" . $this->url . "';  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = '" . $this->id . "'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://" . $this->domain . ".disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();

");
//<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        }
    }


    public function run()
    {

        return Html::tag('div', '', ['id' => 'disqus_thread']);


    }

}
