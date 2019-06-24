<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/**
* @var yii\web\View $this
* @var yii\data\ActiveDataProvider $dataProvider
* @var app\modules\members\models\MembersSearch $searchModel
*/



/**
* create action column template depending acces rights
*/
$actionColumnTemplates = [];

if (\Yii::$app->user->can('members_member_view')) { 
    $actionColumnTemplates[] = '{view}';
}

if (\Yii::$app->user->can('members_member_update')) {
    $actionColumnTemplates[] = '{update}';
}

if (\Yii::$app->user->can('members_member_delete')) {
    $actionColumnTemplates[] = '{delete}';
}
if (isset($actionColumnTemplates)) {
    $actionColumnTemplate = implode(' ', $actionColumnTemplates);
    $actionColumnTemplateString = $actionColumnTemplate;
} else {
    Yii::$app->view->params['pageButtons'] = Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']);
    $actionColumnTemplateString = "{view} {update} {delete}";
}
?>
<div class="giiant-crud members-index">

    <?php //             echo $this->render('_search', ['model' =>$searchModel]);
    ?>


    <?php \yii\widgets\Pjax::begin(['id'=>'pjax-main', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-main ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>

    <h1>
        <?= Yii::t('cruds', 'Members') ?>        <small>
            List
        </small>
    </h1>
    <div class="clearfix crud-navigation">
        <?php
        if(\Yii::$app->user->can('members_member_create')){
        ?>
            <div class="pull-left">
                <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']) ?>
            </div>
        <?php
        }
        ?>
        <div class="pull-right">


            <?= 
            \yii\bootstrap\ButtonDropdown::widget(
                [
                    'id' => 'giiant-relations',
                    'encodeLabel' => false,
                    'label' => '<span class="glyphicon glyphicon-paperclip"></span> ' . 'Relations',
                    'dropdown' => [
                        'options' => [
                            'class' => 'dropdown-menu-right'
                        ],
                        'encodeLabels' => false,
                        'items' => []
                    ],
                    'options' => [
                        'class' => 'btn-default'
                    ]
                ]
            );
        ?>        </div>
    </div>

    <hr />

    <div class="table-responsive">
        <?= GridView::widget([
            'layout' => '{summary}{pager}{items}{pager}',
            'dataProvider' => $dataProvider,
            'pager' => [
                'class' => yii\widgets\LinkPager::className(),
                'firstPageLabel' => 'First',
                'lastPageLabel' => 'Last'        ],
            'filterModel' => $searchModel,
            'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
            'headerRowOptions' => ['class'=>'x'],
            'columns' => [

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => $actionColumnTemplateString,
                    'urlCreator' => function($action, $model, $key, $index) {
                        // using the column name as key, not mapping to 'id' like the standard generator
                        $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
                        $params[0] = \Yii::$app->controller->id ? \Yii::$app->controller->id . '/' . $action : $action;
                        return Url::toRoute($params);
                    },
                    'contentOptions' => ['nowrap'=>'nowrap']
                ],
                'nzga_number',
                //'non_member',
                //'gnz_family_member_number',
                //'instructor',
                //'aero_tow',
                //'winch_rating',
                //'self_launch',
                //'tow_pilot',
                //'qgp_number',
                //'silver_certificate_number',
                //'silver_duration',
                //'silver_distance',
                //'silver_height',
                //'gold_badge_number',
                //'gold_distance',
                //'gold_height',
                //'diamond_distance_number',
                //'diamond_height_number',
                //'diamond_goal_number',
                //'all_3_diamonds_number',
                //'flight_1000km_number',
                //'flight_1250km_number',
                //'flight_1500km_number',
                //'pending_approval',
                //'instructor_trainer',
                //'tow_pilot_instructor',
                //'aero_instructor',
                //'advanced_aero_instructor',
                //'auto_tow',
                //'coach',
                //'privacy',
                //'contest_pilot',
                //'password',
                //'salt',
                //[
                //    'attribute'=>'access_level',
                //    'value' => function ($model) {
                //        return app\modules\members\models\Members::getAccessLevelValueLabel($model->access_level);
                //    }    
                //],
                'first_name',
                'last_name',
                'email:email',
                //[
                //    'attribute'=>'gender',
                //    'value' => function ($model) {
                //        return app\modules\members\models\Members::getGenderValueLabel($model->gender);
                //    }    
                //],
                //'previous_clubs:ntext',
                //'resigned_comment:ntext',
                //'awards:ntext',
                //'comments:ntext',
                //'modified',
                //'created',
                //'date_joined',
                //'date_of_birth',
                //'resigned',
                //'date_of_qgp',
                //'login_name',
                //'middle_name',
                'membership_type',
                'club',
                //'address_1',
                //'address_2',
                'city',
                //'country',
                //'zip_post',
                //'home_phone',
                'mobile_phone',
                //'business_phone',
                //'insttrain',
                'observer_number',
                //'instructor_rating',
            ],
        ]); ?>
    </div>

</div>


<?php \yii\widgets\Pjax::end() ?>


