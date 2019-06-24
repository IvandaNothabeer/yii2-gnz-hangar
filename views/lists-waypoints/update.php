<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\ListsWaypoints $model
* @var string $relAttributes relation fields names for disabling
*/
if(!isset($relAttributes)){
    $relAttributes = false;
}

$this->title = Yii::t('cruds', 'ListsWaypoints') . $model->lists_id . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => Yii::t('cruds', 'ListsWaypoints'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->lists_id, 'url' => ['view', 'lists_id' => $model->lists_id, 'waypoints_id' => $model->waypoints_id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud lists-waypoints-update">

    <h1>
        <?= Yii::t('cruds', 'ListsWaypoints') ?>
        <small>
                        <?= $model->lists_id ?>        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . 'View', ['view', 'lists_id' => $model->lists_id, 'waypoints_id' => $model->waypoints_id], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
        'model' => $model,
        'relAttributes' => $relAttributes,
    ]); ?>

</div>
