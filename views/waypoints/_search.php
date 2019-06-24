<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var app\models\WaypointsSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="waypoints-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'name') ?>

		<?= $form->field($model, 'code') ?>

		<?= $form->field($model, 'country') ?>

		<?= $form->field($model, 'lat') ?>

		<?php // echo $form->field($model, 'lon') ?>

		<?php // echo $form->field($model, 'elevation') ?>

		<?php // echo $form->field($model, 'style') ?>

		<?php // echo $form->field($model, 'direction') ?>

		<?php // echo $form->field($model, 'length') ?>

		<?php // echo $form->field($model, 'frequency') ?>

		<?php // echo $form->field($model, 'description') ?>

		<?php // echo $form->field($model, 'number') ?>

		<?php // echo $form->field($model, 'batch') ?>

		<?php // echo $form->field($model, 'created_at') ?>

		<?php // echo $form->field($model, 'updated_at') ?>

		<?php // echo $form->field($model, 'location') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
