<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var app\models\Aircraft $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="aircraft-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Aircraft',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-danger',
    'fieldConfig' => [
             'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
             'horizontalCssClasses' => [
                 'label' => 'col-sm-2',
                 #'offset' => 'col-sm-offset-4',
                 'wrapper' => 'col-sm-8',
                 'error' => '',
                 'hint' => '',
             ],
         ],
    ]
    );
    ?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>
            

<!-- attribute rego -->
			<?= $form->field($model, 'rego')->textInput(['maxlength' => true]) ?>

<!-- attribute flarm -->
			<?= $form->field($model, 'flarm')->textInput(['maxlength' => true]) ?>

<!-- attribute spot_feed_id -->
			<?= $form->field($model, 'spot_feed_id')->textInput(['maxlength' => true]) ?>

<!-- attribute spot_esn -->
			<?= $form->field($model, 'spot_esn')->textInput(['maxlength' => true]) ?>

<!-- attribute particle_id -->
			<?= $form->field($model, 'particle_id')->textInput(['maxlength' => true]) ?>

<!-- attribute annual_inspection_due -->
			<?= $form->field($model, 'annual_inspection_due')->textInput() ?>

<!-- attribute annual_airworthiness_due -->
			<?= $form->field($model, 'annual_airworthiness_due')->textInput() ?>

<!-- attribute radio_due -->
			<?= $form->field($model, 'radio_due')->textInput() ?>

<!-- attribute transponder_due -->
			<?= $form->field($model, 'transponder_due')->textInput() ?>

<!-- attribute altimeter_due -->
			<?= $form->field($model, 'altimeter_due')->textInput() ?>

<!-- attribute created_at -->
			<?= $form->field($model, 'created_at')->textInput() ?>

<!-- attribute updated_at -->
			<?= $form->field($model, 'updated_at')->textInput() ?>

<!-- attribute spot_active -->
			<?= $form->field($model, 'spot_active')->textInput() ?>

<!-- attribute seats -->
			<?= $form->field($model, 'seats')->textInput() ?>

<!-- attribute towplane -->
			<?= $form->field($model, 'towplane')->textInput() ?>

<!-- attribute self_launcher -->
			<?= $form->field($model, 'self_launcher')->textInput() ?>

<!-- attribute sustainer -->
			<?= $form->field($model, 'sustainer')->textInput() ?>

<!-- attribute retractable -->
			<?= $form->field($model, 'retractable')->textInput() ?>

<!-- attribute vintage -->
			<?= $form->field($model, 'vintage')->textInput() ?>

<!-- attribute jet -->
			<?= $form->field($model, 'jet')->textInput() ?>

<!-- attribute electric -->
			<?= $form->field($model, 'electric')->textInput() ?>

<!-- attribute contest_id -->
			<?= $form->field($model, 'contest_id')->textInput(['maxlength' => true]) ?>

<!-- attribute manufacturer -->
			<?= $form->field($model, 'manufacturer')->textInput(['maxlength' => true]) ?>

<!-- attribute model -->
			<?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

<!-- attribute serial -->
			<?= $form->field($model, 'serial')->textInput(['maxlength' => true]) ?>

<!-- attribute mctow -->
			<?= $form->field($model, 'mctow')->textInput(['maxlength' => true]) ?>

<!-- attribute class -->
			<?= $form->field($model, 'class')->textInput(['maxlength' => true]) ?>

<!-- attribute transponder -->
			<?= $form->field($model, 'transponder')->textInput(['maxlength' => true]) ?>

<!-- attribute trailer -->
			<?= $form->field($model, 'trailer')->textInput(['maxlength' => true]) ?>

<!-- attribute owner -->
			<?= $form->field($model, 'owner')->textInput(['maxlength' => true]) ?>

<!-- attribute location -->
			<?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   => Yii::t('models', 'Aircraft'),
    'content' => $this->blocks['main'],
    'active'  => true,
],
                    ]
                 ]
    );
    ?>
        <hr/>

        <?php echo $form->errorSummary($model); ?>

        <?= Html::submitButton(
        '<span class="glyphicon glyphicon-check"></span> ' .
        ($model->isNewRecord ? 'Create' : 'Save'),
        [
        'id' => 'save-' . $model->formName(),
        'class' => 'btn btn-success'
        ]
        );
        ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>

