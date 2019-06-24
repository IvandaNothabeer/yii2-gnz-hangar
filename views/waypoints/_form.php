<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var app\models\Waypoints $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="waypoints-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Waypoints',
    'layout' => 'default',
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
            

<!-- attribute lat -->
			<?= $form->field($model, 'lat')->textInput(['maxlength' => true]) ?>

<!-- attribute lon -->
			<?= $form->field($model, 'lon')->textInput(['maxlength' => true]) ?>

<!-- attribute elevation -->
			<?= $form->field($model, 'elevation')->textInput() ?>

<!-- attribute style -->
			<?= $form->field($model, 'style')->dropDownList($model->styleNames()) ?>

<!-- attribute length -->
			<?= $form->field($model, 'length')->textInput() ?>

<!-- attribute number -->
			<?php // $form->field($model, 'number')->textInput() ?>

<!-- attribute batch -->
			<?php // $form->field($model, 'batch')->textInput() ?>

<!-- attribute description -->
			<?= $form->field($model, 'description')->textarea(['rows' => 1]) ?>

<!-- attribute location -->
			<?php // $form->field($model, 'location')->textInput() ?>

<!-- attribute created_at -->
			<?php // $form->field($model, 'created_at')->textInput() ?>

<!-- attribute updated_at -->
			<?php // $form->field($model, 'updated_at')->textInput() ?>

<!-- attribute name -->
			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<!-- attribute code -->
			<?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

<!-- attribute country -->
			<?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

<!-- attribute direction -->
			<?= $form->field($model, 'direction')->textInput(['maxlength' => true]) ?>

<!-- attribute frequency -->
			<?= $form->field($model, 'frequency')->textInput(['maxlength' => true]) ?>
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   => Yii::t('models', 'Waypoints'),
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

