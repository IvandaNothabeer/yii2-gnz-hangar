<?php

namespace app\models;

use Yii;
use \app\models\base\Waypoints as BaseWaypoints;
use yii\helpers\ArrayHelper;

/**
* This is the model class for table "waypoints".
*/
class Waypoints extends BaseWaypoints
{

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                # custom validation rules
            ]
        );
    }

    public static function styleNames()
    {
        return [
        'Unknown',
        'Waypoint',
        'Grass Runway',
        'Outlanding',
        'Gliding airfield',
        'Sealed Runway',
        'Mountain Pass',
        'Mountain Top',
        'Transmitter Mast',
        'VOR',
        'NDB',
        'Cooling Tower',
        'Dam',
        'Tunnel',
        'Bridge',
        'Power Plant',
        'Castle',
        'Intersection'    
        ];
    }
}
