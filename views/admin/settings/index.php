<?php

use panix\engine\Html;
use panix\engine\bootstrap\ActiveForm;

/**
 * @var \yii\web\View $this
 * @var \yii\widgets\ActiveForm $form
 * @var \panix\mod\disqus\models\SettingsForm $model
 */
?>
<?php
$form = ActiveForm::begin();
?>
    <div class="card">
        <div class="card-header">
            <h5><?= $this->context->pageName ?></h5>
        </div>
        <div class="card-body">
            <?= $form->field($model, 'domain') ?>
            <?= $form->field($model, 'api_key') ?>
            <?= $form->field($model, 'api_secret') ?>

        </div>
        <div class="card-footer text-center">
            <?= Html::submitButton(Yii::t('app/default', 'SAVE'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>
<?php ActiveForm::end(); ?>


<?php
//echo \panix\mod\disqus\DisqusCountWidget::widget([]);

/*
$client = new \yii\httpclient\Client();
$response = $client->createRequest()
    ->setMethod('GET')
    ->setUrl('https://disqus.com/api/3.0/threads/list.json')
    ->setData([
        'api_key'=>'Nq04eTphaYnemjhYiuG7jBM7nak1iEb9kh0u5ZaQHMu8hEoF5Vva2czkNHs7Q2JU',
        'api_secret'=>'xtBvBYmiEBZtSfV9DDtPvLy48z6LvtthdaotkkurGgMpUpb2P5moZ9bWmFtWif3l',
        'forum' => 'aspect-company'
    ])


    //->setUrl('https://disqus.com/api/3.0/posts/list.json')
    //->setData([
    //    'api_key'=>'Nq04eTphaYnemjhYiuG7jBM7nak1iEb9kh0u5ZaQHMu8hEoF5Vva2czkNHs7Q2JU',
    //    'api_secret'=>'xtBvBYmiEBZtSfV9DDtPvLy48z6LvtthdaotkkurGgMpUpb2P5moZ9bWmFtWif3l',
    //    'forum' => 'aspect-company'
   // ])


    ->send();
if ($response->isOk) {
    \panix\engine\CMS::dump($response->data);
   // $newUserId = $response->data['id'];
}*/


//echo \panix\mod\disqus\DisqusWidget::widget([]);

?>
