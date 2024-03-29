<?php

namespace app\models;

use Yii;
use \app\models\base\Aircraft as BaseAircraft;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "aircraft".
 */
class Aircraft extends BaseAircraft
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
}
