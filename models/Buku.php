<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buku".
 *
 * @property int $id
 * @property string|null $judul
 * @property string|null $pengarang
 * @property int|null $tahun_terbit
 * @property int|null $stok
 */
class Buku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'buku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun_terbit', 'stok'], 'integer'],
            [['judul', 'pengarang'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'judul' => Yii::t('app', 'Judul'),
            'pengarang' => Yii::t('app', 'Pengarang'),
            'tahun_terbit' => Yii::t('app', 'Tahun Terbit'),
            'stok' => Yii::t('app', 'Stok'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return BukuQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BukuQuery(get_called_class());
    }
}
