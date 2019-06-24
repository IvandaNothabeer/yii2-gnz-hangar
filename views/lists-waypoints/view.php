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
 * @var app\models\ListsWaypoints $model
 */
$copyParams = $model->attributes;

$this->title = Yii::t('cruds', 'ListsWaypoints');
$this->params['breadcrumbs'][] = ['label' => Yii::t('cruds', 'ListsWaypoints'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string) $model->lists_id, 'url' => ['view', 'lists_id' => $model->lists_id, 'waypoints_id' => $model->waypoints_id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud lists-waypoints-view">

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <h1>
        <?= Yii::t('cruds', 'ListsWaypoints') ?>        <small>
            <?= $model->lists_id ?>        </small>
    </h1>


    <div class="clearfix crud-navigation">

        <!-- menu buttons -->
        <div class='pull-left'>
            <?= Html::a(
            '<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
            [ 'update', 'lists_id' => $model->lists_id, 'waypoints_id' => $model->waypoints_id],
            ['class' => 'btn btn-info']) ?>

            <?= Html::a(
            '<span class="glyphicon glyphicon-copy"></span> ' . 'Copy',
            ['create', 'lists_id' => $model->lists_id, 'waypoints_id' => $model->waypoints_id, 'ListsWaypoints'=>$copyParams],
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

    <?php $this->beginBlock('app\models\ListsWaypoints'); ?>

    
    <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
            'lists_id',
        'waypoints_id',
        'owner',
    ],
    ]); ?>

    
    <hr/>

    <?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', ['delete', 'lists_id' => $model->lists_id, 'waypoints_id' => $model->waypoints_id],
    [
    'class' => 'btn btn-danger',
    'data-confirm' => '' . 'Are you sure to delete this item?' . '',
    'data-method' => 'post',
    ]); ?>
    <?php $this->endBlock(); ?>


        <div class="row">
        <div class="col-md-4">
            <?=$this->blocks['app\models\ListsWaypoints']?>
        </div>
    </div>    
</div>
