<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Lists $model
*/

$this->title = Yii::t('models', 'Lists');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Lists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud lists-create">

    <h1>
        <?= Yii::t('models', 'Lists') ?>
        <small>
                        <?= Html::encode($model->name) ?>
        </small>
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
    ]); ?>

</div>
