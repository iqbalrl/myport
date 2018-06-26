<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "kokab".
 *
 * @property int $id_kokab
 * @property int $id_pro
 * @property string $nm_kokab
 *
 * @property Kecamatan[] $kecamatans
 * @property Propinsi $pro
 */
class Kokab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kokab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pro', 'nm_kokab'], 'required'],
            [['id_pro'], 'integer'],
            [['nm_kokab'], 'string', 'max' => 35],
            [['id_pro'], 'exist', 'skipOnError' => true, 'targetClass' => Propinsi::className(), 'targetAttribute' => ['id_pro' => 'id_pro']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kokab' => 'Id Kokab',
            'pro.nm_pro' => 'Provinsi',
            'nm_kokab' => 'Kota/Kabupaten',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKecamatans()
    {
        return $this->hasMany(Kecamatan::className(), ['id_kokab' => 'id_kokab']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPro()
    {
        return $this->hasOne(Propinsi::className(), ['id_pro' => 'id_pro']);
    }
    
    public static function selectOptions($id_pro)
    {
        return ArrayHelper::map(static::find()->where(['id_pro'=>$id_pro])->asArray()->all(), 'id_kokab', 'nm_kokab');
    }
}
