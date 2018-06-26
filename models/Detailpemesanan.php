<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detailpemesanan".
 *
 * @property int $idDetail
 * @property int $idBarang
 * @property string $namaBarang
 * @property int $jumlahPemesanan
 * @property int $harga
 */
class Detailpemesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detailpemesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idBarang', 'namaBarang', 'jumlahPemesanan', 'harga'], 'required'],
            [['idBarang', 'jumlahPemesanan', 'harga'], 'integer'],
            [['namaBarang'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idDetail' => 'Id Detail',
            'idBarang' => 'Id Barang',
            'namaBarang' => 'Nama Barang',
            'jumlahPemesanan' => 'Jumlah Pemesanan',
            'harga' => 'Harga',
        ];
    }
}
