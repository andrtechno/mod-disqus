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

echo \panix\mod\disqus\DisqusWidget::widget([]);

?>
