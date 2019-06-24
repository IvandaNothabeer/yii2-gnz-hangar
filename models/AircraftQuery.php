<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Aircraft]].
 *
 * @see Aircraft
 */
class AircraftQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Aircraft[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Aircraft|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
