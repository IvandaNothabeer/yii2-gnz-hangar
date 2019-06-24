<?php

namespace app\modules\contest\models;

/**
 * This is the ActiveQuery class for [[Entries]].
 *
 * @see Entries
 */
class EntriesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Entries[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Entries|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
