<?php

namespace app\modules\members\models;

use Yii;
use \app\modules\members\models\base\Members as BaseMembers;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "gnz_member".
 */
class Members extends BaseMembers
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
