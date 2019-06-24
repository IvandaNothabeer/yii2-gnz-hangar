<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Lists]].
 *
 * @see Lists
 */
class ListsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Lists[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Lists|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
