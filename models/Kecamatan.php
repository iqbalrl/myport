<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kecamatan".
 *
 * @property int $id_kecamatan
 * @property int $id_kokab
 * @property string $nm_kecamatan
 *
 * @property Kokab $kokab
 */
class Kecamatan extends \yii\db\ActiveRecord
{
    public $id_pro;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kecamatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kokab', 'id_pro', 'nm_kecamatan'], 'required'],
            [['id_kokab'], 'integer'],
            [['nm_kecamatan'], 'string', 'max' => 35],
            [['id_kokab'], 'exist', 'skipOnError' => true, 'targetClass' => Kokab::className(), 'targetAttribute' => ['id_kokab' => 'id_kokab']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kecamatan' => 'Kecamatan',
            'id_pro' => 'Id Provinsi',
            'id_kokab' => 'Kabupaten',
            'nm_kecamatan' => 'Kecamatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKokab()
    {
        return $this->hasOne(Kokab::className(), ['id_kokab' => 'id_kokab']);
    }
}
