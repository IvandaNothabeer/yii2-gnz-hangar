<?php

use dmstr\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use kartik\editable\Editable;
use kartik\grid\GridView;
use kartik\grid\EditableColumn;

/**
 * @var yii\web\View $this
 * @var app\modules\members\models\Members $model
 */
$copyParams = $model->attributes;

$this->title = Yii::t('cruds', 'Members');
$this->params['breadcrumbs'][] = ['label' => Yii::t('cruds', 'Members'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string) $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud members-view">

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <h1>
        <?= Yii::t('cruds', 'Members') ?>        <small>
            <?= $model->id ?>        </small>
    </h1>


    <div class="clearfix crud-navigation">

        <!-- menu buttons -->
        <div class='pull-left'>
            <?= Html::a(
            '<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
            [ 'update', 'id' => $model->id],
            ['class' => 'btn btn-info']) ?>

            <?= Html::a(
            '<span class="glyphicon glyphicon-copy"></span> ' . 'Copy',
            ['create', 'id' => $model->id, 'Members'=>$copyParams],
            ['class' => 'btn btn-success']) ?>

            <?= Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . 'New',
            ['create'],
            ['class' => 'btn btn-success']) ?>
        </div>

        <div class="pull-right">
            <?= Html::a('<span class="glyphicon glyphicon-list"></span> '
            . 'Full list', ['index'], ['class'=>'btn btn-default']) ?>
        </div>

    </div>

    <hr />

    <?php $this->beginBlock('app\modules\members\models\Members'); ?>

    
    <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
            'nzga_number',
        'login_name',
        'password',
        'salt',
        'access_level',
        'non_member',
        'first_name',
        'middle_name',
        'last_name',
        'email:email',
        'modified',
        'created',
        'membership_type',
        'club',
        'date_joined',
        'gender',
        'address_1',
        'address_2',
        'city',
        'country',
        'zip_post',
        'date_of_birth',
        'home_phone',
        'mobile_phone',
        'business_phone',
        'gnz_family_member_number',
        'resigned',
        'previous_clubs:ntext',
        'resigned_comment:ntext',
        'instructor',
        'instructor_rating',
        'aero_tow',
        'winch_rating',
        'self_launch',
        'insttrain',
        'observer_number',
        'tow_pilot',
        'awards:ntext',
        'qgp_number',
        'date_of_qgp',
        'silver_certificate_number',
        'silver_duration',
        'silver_distance',
        'silver_height',
        'gold_badge_number',
        'gold_distance',
        'gold_height',
        'diamond_distance_number',
        'diamond_height_number',
        'diamond_goal_number',
        'all_3_diamonds_number',
        'flight_1000km_number',
        'flight_1250km_number',
        'flight_1500km_number',
        'pending_approval',
        'comments:ntext',
        'instructor_trainer',
        'tow_pilot_instructor',
        'aero_instructor',
        'advanced_aero_instructor',
        'auto_tow',
        'coach',
        'privacy',
        'contest_pilot',
    ],
    ]); ?>

    
    <hr/>

    <?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', ['delete', 'id' => $model->id],
    [
    'class' => 'btn btn-danger',
    'data-confirm' => '' . 'Are you sure to delete this item?' . '',
    'data-method' => 'post',
    ]); ?>
    <?php $this->endBlock(); ?>


        <div class="row">
        <div class="col-md-4">
            <?=$this->blocks['app\modules\members\models\Members']?>
        </div>
    </div>    
</div>
