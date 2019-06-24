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
 * @var app\modules\contest\models\Contests $model
 */
$copyParams = $model->attributes;

$this->title = Yii::t('cruds', 'Contests');
$this->params['breadcrumbs'][] = ['label' => Yii::t('cruds', 'Contests'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string) $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud contests-view">

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <h1>
        <?= Yii::t('cruds', 'Contests') ?>        <small>
            <?= $model->name ?>        </small>
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
            ['create', 'id' => $model->id, 'Contests'=>$copyParams],
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

    <?php $this->beginBlock('app\modules\contest\models\Contests'); ?>

    
    <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
            'name',
        'description:ntext',
        'start',
        'end',
        'metadata',
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


    
<?php $this->beginBlock('Entries'); ?>

            <div class="clearfix crud-navigation">
                <div class="pull-left">
                    <h2>Entries</h2>
                </div>        
                <div class="pull-right">
                     <div class="btn-group">
                        <?= Html::a(
                        '<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Entries',
                        ['entries/index'],
                        ['class'=>'btn text-muted btn-xs']
                        ) ?>
                        <?= Html::a(
                            '<span class="glyphicon glyphicon-plus"></span> ' . 'New',
                            ['entries/create', 'Entries' => ['contest_id' => $model->id]],
                            ['class'=>'btn btn-success btn-xs']
                        ); 
                        ?>
                        <?= Html::a(
                            '<span class="glyphicon glyphicon-plus"></span> ' . 'Add row',
                            ['entries/create-for-rel', 'Entries' => ['contest_id' => $model->id]],
                            ['class'=>'btn btn-success btn-xs']
                        );?>
                         
                    </div>
                </div>
            </div>
<?php $this->endBlock() ?>

    <div class="row">
        <div class="col-md-4">
            <?=$this->blocks['app\modules\contest\models\Contests']?>
        </div>
        <div class="col-md-8">
            <?=$this->blocks['Entries']?>
        </div>
    </div>    
</div>
