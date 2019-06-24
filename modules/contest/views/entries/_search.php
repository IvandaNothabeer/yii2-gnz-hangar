<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var app\modules\contest\models\EntriesSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="entries-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'classes_id') ?>

		<?= $form->field($model, 'contest_id') ?>

		<?= $form->field($model, 'name') ?>

		<?= $form->field($model, 'rego') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
