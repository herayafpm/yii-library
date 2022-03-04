<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Peminjaman]].
 *
 * @see Peminjaman
 */
class PeminjamanQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Peminjaman[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Peminjaman|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
