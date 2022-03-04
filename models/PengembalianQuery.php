<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pengembalian]].
 *
 * @see Pengembalian
 */
class PengembalianQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Pengembalian[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Pengembalian|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
