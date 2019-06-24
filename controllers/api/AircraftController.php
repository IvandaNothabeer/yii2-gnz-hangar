<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "AircraftController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class AircraftController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Aircraft';
}
