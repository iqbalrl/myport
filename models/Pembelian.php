<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembelian".
 *
 * @property int $idBeli
 * @property string $tanggal
 */
class Pembelian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembelian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idBeli' => 'Id Beli',
            'tanggal' => 'Tanggal',
        ];
    }
}
