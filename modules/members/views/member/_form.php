<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var app\modules\members\models\Members $model
* @var yii\widgets\ActiveForm $form
* @var string $relAttributes relation fields names for disabling 
*/

?>

<div class="members-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Members',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-error'
    ]
    );
    ?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>
            
			<?= $form->field($model, 'nzga_number')->textInput() ?>
			<?= $form->field($model, 'login_name')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'salt')->textInput(['maxlength' => true]) ?>
			<?=                         $form->field($model, 'access_level')->dropDownList(
                            app\modules\members\models\Members::optsaccesslevel()
                        ); ?>
			<?= $form->field($model, 'non_member')->textInput() ?>
			<?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'modified')->textInput() ?>
			<?= $form->field($model, 'created')->textInput() ?>
			<?= $form->field($model, 'membership_type')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'club')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'date_joined')->textInput() ?>
			<?=                         $form->field($model, 'gender')->dropDownList(
                            app\modules\members\models\Members::optsgender()
                        ); ?>
			<?= $form->field($model, 'address_1')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'address_2')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'zip_post')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'date_of_birth')->textInput() ?>
			<?= $form->field($model, 'home_phone')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'mobile_phone')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'business_phone')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'gnz_family_member_number')->textInput() ?>
			<?= $form->field($model, 'resigned')->textInput() ?>
			<?= $form->field($model, 'previous_clubs')->textarea(['rows' => 6]) ?>
			<?= $form->field($model, 'resigned_comment')->textarea(['rows' => 6]) ?>
			<?= $form->field($model, 'instructor')->textInput() ?>
			<?= $form->field($model, 'instructor_rating')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'aero_tow')->textInput() ?>
			<?= $form->field($model, 'winch_rating')->textInput() ?>
			<?= $form->field($model, 'self_launch')->textInput() ?>
			<?= $form->field($model, 'insttrain')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'observer_number')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'tow_pilot')->textInput() ?>
			<?= $form->field($model, 'awards')->textarea(['rows' => 6]) ?>
			<?= $form->field($model, 'qgp_number')->textInput() ?>
			<?= $form->field($model, 'date_of_qgp')->textInput() ?>
			<?= $form->field($model, 'silver_certificate_number')->textInput() ?>
			<?= $form->field($model, 'silver_duration')->textInput() ?>
			<?= $form->field($model, 'silver_distance')->textInput() ?>
			<?= $form->field($model, 'silver_height')->textInput() ?>
			<?= $form->field($model, 'gold_badge_number')->textInput() ?>
			<?= $form->field($model, 'gold_distance')->textInput() ?>
			<?= $form->field($model, 'gold_height')->textInput() ?>
			<?= $form->field($model, 'diamond_distance_number')->textInput() ?>
			<?= $form->field($model, 'diamond_height_number')->textInput() ?>
			<?= $form->field($model, 'diamond_goal_number')->textInput() ?>
			<?= $form->field($model, 'all_3_diamonds_number')->textInput() ?>
			<?= $form->field($model, 'flight_1000km_number')->textInput() ?>
			<?= $form->field($model, 'flight_1250km_number')->textInput() ?>
			<?= $form->field($model, 'flight_1500km_number')->textInput() ?>
			<?= $form->field($model, 'pending_approval')->textInput() ?>
			<?= $form->field($model, 'comments')->textarea(['rows' => 6]) ?>
			<?= $form->field($model, 'instructor_trainer')->textInput() ?>
			<?= $form->field($model, 'tow_pilot_instructor')->textInput() ?>
			<?= $form->field($model, 'aero_instructor')->textInput() ?>
			<?= $form->field($model, 'advanced_aero_instructor')->textInput() ?>
			<?= $form->field($model, 'auto_tow')->textInput() ?>
			<?= $form->field($model, 'coach')->textInput() ?>
			<?= $form->field($model, 'privacy')->textInput() ?>
			<?= $form->field($model, 'contest_pilot')->textInput() ?>
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                   'encodeLabels' => false,
                     'items' => [ [
    'label'   => Yii::t('cruds', StringHelper::basename('app\modules\members\models\Members')),
    'content' => $this->blocks['main'],
    'active'  => true,
], ]
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

