<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "ListsWaypointsController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class ListsWaypointsController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\ListsWaypoints';
}
