<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Waypoints $model
*/

$this->title = Yii::t('models', 'Waypoints');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Waypoints'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud waypoints-create">

    <h1>
        <?= Yii::t('models', 'Waypoints') ?>
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
