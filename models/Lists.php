<?php

namespace app\models;

use Yii;
use \app\models\base\Lists as BaseLists;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "lists".
 */
class Lists extends BaseLists
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
