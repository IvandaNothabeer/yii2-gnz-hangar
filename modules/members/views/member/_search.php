<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var app\modules\members\models\MembersSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="members-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'nzga_number') ?>

    <?php // $form->field($model, 'login_name') ?>

    <?php // $form->field($model, 'password') ?>

    <?php // $form->field($model, 'salt') ?>

    <?php // echo $form->field($model, 'access_level') ?>

    <?php // echo $form->field($model, 'non_member') ?>

    <?php // echo $form->field($model, 'first_name') ?>

    <?php // echo $form->field($model, 'middle_name') ?>

    <?php // echo $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'modified') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'membership_type') ?>

    <?php // echo $form->field($model, 'club') ?>

    <?php // echo $form->field($model, 'date_joined') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'address_1') ?>

    <?php // echo $form->field($model, 'address_2') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'zip_post') ?>

    <?php // echo $form->field($model, 'date_of_birth') ?>

    <?php // echo $form->field($model, 'home_phone') ?>

    <?php // echo $form->field($model, 'mobile_phone') ?>

    <?php // echo $form->field($model, 'business_phone') ?>

    <?php // echo $form->field($model, 'gnz_family_member_number') ?>

    <?php // echo $form->field($model, 'resigned') ?>

    <?php // echo $form->field($model, 'previous_clubs') ?>

    <?php // echo $form->field($model, 'resigned_comment') ?>

    <?= $form->field($model, 'instructor')->checkbox() ?>

    <?php // echo $form->field($model, 'instructor_rating') ?>

    <?php // echo $form->field($model, 'aero_tow') ?>

    <?php // echo $form->field($model, 'winch_rating') ?>

    <?php // echo $form->field($model, 'self_launch') ?>

    <?php // echo $form->field($model, 'insttrain') ?>

    <?php // echo $form->field($model, 'observer_number') ?>

    <?= $form->field($model, 'tow_pilot')->checkbox() ?>

    <?php // echo $form->field($model, 'awards') ?>

    <?php // echo $form->field($model, 'qgp_number') ?>

    <?php // echo $form->field($model, 'date_of_qgp') ?>

    <?php // echo $form->field($model, 'silver_certificate_number') ?>

    <?php // echo $form->field($model, 'silver_duration') ?>

    <?php // echo $form->field($model, 'silver_distance') ?>

    <?php // echo $form->field($model, 'silver_height') ?>

    <?php // echo $form->field($model, 'gold_badge_number') ?>

    <?php // echo $form->field($model, 'gold_distance') ?>

    <?php // echo $form->field($model, 'gold_height') ?>

    <?php // echo $form->field($model, 'diamond_distance_number') ?>

    <?php // echo $form->field($model, 'diamond_height_number') ?>

    <?php // echo $form->field($model, 'diamond_goal_number') ?>

    <?php // echo $form->field($model, 'all_3_diamonds_number') ?>

    <?php // echo $form->field($model, 'flight_1000km_number') ?>

    <?php // echo $form->field($model, 'flight_1250km_number') ?>

    <?php // echo $form->field($model, 'flight_1500km_number') ?>

    <?php // echo $form->field($model, 'pending_approval') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'instructor_trainer') ?>

    <?php // echo $form->field($model, 'tow_pilot_instructor') ?>

    <?php // echo $form->field($model, 'aero_instructor') ?>

    <?php // echo $form->field($model, 'advanced_aero_instructor') ?>

    <?php // echo $form->field($model, 'auto_tow') ?>

    <?= $form->field($model, 'coach')->checkbox() ?>

    <?php // echo $form->field($model, 'privacy') ?>

    <?= $form->field($model, 'contest_pilot')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
