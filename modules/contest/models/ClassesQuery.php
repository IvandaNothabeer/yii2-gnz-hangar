<?php

namespace app\modules\contest\models;

/**
 * This is the ActiveQuery class for [[Classes]].
 *
 * @see Classes
 */
class ClassesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Classes[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Classes|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
