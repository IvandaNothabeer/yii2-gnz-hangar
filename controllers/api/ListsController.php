<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "ListsController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class ListsController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\Lists';
}
