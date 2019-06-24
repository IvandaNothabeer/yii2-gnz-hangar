<?php

namespace app\modules\contest\models;

use Yii;
use \app\modules\contest\models\base\Classes as BaseClasses;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "classes".
 */
class Classes extends BaseClasses
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
