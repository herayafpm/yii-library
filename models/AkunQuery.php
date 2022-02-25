<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Akuns]].
 *
 * @see Akuns
 */
class AkunQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Akuns[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Akuns|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
