<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "masterbarang".
 *
 * @property int $idBarang
 * @property string $namaBarang
 * @property int $jumlahStock
 * @property int $hargaSatuan
 */
class Masterbarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'masterbarang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idBarang', 'hargaSatuan'], 'required'],
            [['idBarang', 'jumlahStock', 'hargaSatuan'], 'integer'],
            [['namaBarang'], 'string', 'max' => 50],
            [['idBarang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idBarang' => 'Id Barang',
            'namaBarang' => 'Nama Barang',
            'jumlahStock' => 'Jumlah Stock',
            'hargaSatuan' => 'Harga Satuan',
        ];
    }
}
