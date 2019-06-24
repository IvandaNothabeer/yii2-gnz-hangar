<?php

namespace app\modules\members\models;

use yii;

/**
* This is the ActiveQuery class for [[Members]].
*
* @see Members
*/
class MembersQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
    $this->andWhere('[[status]]=1');
    return $this;
    }*/

    /**
    * @inheritdoc
    * @return Members[]|array
    */
    public function all($db = null)
    {

        if (Yii::$app->user->can('MembersMemberFull'))
            return parent::all($db);
        else{
            parent::where(['privacy'=>0]);
            return parent::all($db);
        }
    }

    /**
    * @inheritdoc
    * @return Members|array|null
    */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
