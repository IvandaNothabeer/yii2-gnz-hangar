<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\modules\contest\models\Classes $model
* @var string $relAttributes relation fields names for disabling
*/
if(!isset($relAttributes)){
    $relAttributes = false;
}

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => Yii::t('cruds', 'Classes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud classes-create">

    <h1>
        <?= Yii::t('cruds', 'Classes') ?>        <small>
                        <?= $model->name ?>        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?=             Html::a(
            'Cancel',
            \yii\helpers\Url::previous(),
            ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <hr />

    <?= $this->render('_form', [
        'model' => $model,
        'relAttributes' => $relAttributes,
    ]); ?>

</div>
