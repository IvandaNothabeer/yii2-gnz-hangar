<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var app\models\AircraftSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="aircraft-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

        <?php // $form->field($model, 'id') ?>

		<?php // $form->field($model, 'rego') ?>

		<?php // $form->field($model, 'contest_id') ?>

		<?php // $form->field($model, 'manufacturer') ?>

		<?php // $form->field($model, 'model') ?>

		<?php // echo $form->field($model, 'serial') ?>

		<?php // echo $form->field($model, 'mctow') ?>

		<?php // echo $form->field($model, 'class') ?>

		<?php // echo $form->field($model, 'transponder') ?>

		<?php // echo $form->field($model, 'trailer') ?>

		<?php // echo $form->field($model, 'owner') ?>

		<?php // echo $form->field($model, 'location') ?>

		<?php // echo $form->field($model, 'annual_inspection_due') ?>

		<?php // echo $form->field($model, 'annual_airworthiness_due') ?>

		<?php // echo $form->field($model, 'radio_due') ?>

		<?php // echo $form->field($model, 'transponder_due') ?>

		<?php // echo $form->field($model, 'altimeter_due') ?>

		<?php // echo $form->field($model, 'seats') ?>
        <div class=col-md-1>
		<?= $form->field($model, 'towplane')->checkBox() ?>
        </div>
        <div class=col-md-1>
		<?= $form->field($model, 'self_launcher')->checkBox() ?>
        </div>
        <div class=col-md-1>
		<?= $form->field($model, 'sustainer')->checkBox() ?>
        </div>
        <div class=col-md-1>
		<?= $form->field($model, 'retractable')->checkBox() ?>
        </div>
        <div class=col-md-1>
		<?= $form->field($model, 'vintage')->checkBox() ?>
        </div>
        <div class=col-md-1>
		<?= $form->field($model, 'jet')->checkBox() ?>
        </div>
        <div class=col-md-1>
		<?= $form->field($model, 'electric')->checkBox() ?>
        </div>
		<?php // echo $form->field($model, 'created_at') ?>

		<?php // echo $form->field($model, 'updated_at') ?>

		<?php // echo $form->field($model, 'flarm') ?>

		<?php // echo $form->field($model, 'spot_feed_id') ?>

		<?php // echo $form->field($model, 'spot_esn') ?>

		<?php // echo $form->field($model, 'spot_active') ?>

		<?php // echo $form->field($model, 'particle_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
