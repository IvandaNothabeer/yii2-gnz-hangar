<?php

namespace app\controllers;

use app\models\Aircraft;
use app\models\AircraftSearch;
use yii\web\Controller;
use yii\web\HttpException;
use yii\helpers\Url;
use yii\filters\AccessControl;
use kartik\grid\EditableColumnAction;
use yii\data\ActiveDataProvider;

/**
* This is the class for controller "AircraftController".
*/
class AircraftController extends \app\controllers\base\AircraftController
{

        public function actionIndex()
    {
        $searchModel  = new AircraftSearch;
        $dataProvider = $searchModel->search($_GET);
        $dataProvider->pagination = ['pageSize'=>10];
        
        Url::remember();
        \Yii::$app->session['__crudReturnUrl'] = null;

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }
    
}
