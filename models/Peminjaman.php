<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peminjaman".
 *
 * @property int $id
 * @property int $buku_id
 * @property string|null $peminjam
 * @property int|null $qty
 *
 * @property Buku $buku
 */
class Peminjaman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peminjaman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['buku_id'], 'required'],
            [['buku_id', 'qty'], 'integer'],
            [['peminjam'], 'string', 'max' => 255],
            [['buku_id'], 'exist', 'skipOnError' => true, 'targetClass' => Buku::className(), 'targetAttribute' => ['buku_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'buku_id' => Yii::t('app', 'Buku ID'),
            'peminjam' => Yii::t('app', 'Peminjam'),
            'qty' => Yii::t('app', 'Qty'),
        ];
    }

    /**
     * Gets query for [[Buku]].
     *
     * @return \yii\db\ActiveQuery|BukuQuery
     */
    public function getBuku()
    {
        return $this->hasOne(Buku::className(), ['id' => 'buku_id']);
    }

    /**
     * {@inheritdoc}
     * @return PeminjamanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PeminjamanQuery(get_called_class());
    }
}
