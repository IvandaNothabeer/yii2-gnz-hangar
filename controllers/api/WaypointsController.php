<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "WaypointsController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class WaypointsController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Waypoints';
}
