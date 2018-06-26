<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penjualan".
 *
 * @property int $idJual
 * @property string $modeJual
 * @property string $tanggal
 * @property int $idBarang
 * @property int $jumlahBarang
 * @property int $total
 */
class Penjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idJual', 'modeJual'], 'required'],
            [['idJual', 'idBarang', 'jumlahBarang', 'total'], 'integer'],
            [['tanggal'], 'safe'],
            [['modeJual'], 'string', 'max' => 50],
            [['idJual'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idJual' => 'Id Jual',
            'modeJual' => 'Mode Jual',
            'tanggal' => 'Tanggal',
            'idBarang' => 'Id Barang',
            'jumlahBarang' => 'Jumlah Barang',
            'total' => 'Total',
        ];
    }
}
