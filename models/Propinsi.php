<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "propinsi".
 *
 * @property int $id_pro
 * @property string $nm_pro
 *
 * @property Kokab[] $kokabs
 */
class Propinsi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'propinsi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nm_pro'], 'required'],
            [['nm_pro'], 'string', 'max' => 35],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pro' => 'Id Pro',
            'nm_pro' => 'Provinsi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKokabs()
    {
        return $this->hasMany(Kokab::className(), ['id_pro' => 'id_pro']);
    }
    
    public static function selectOptions()
    {
        return ArrayHelper::map(static::find()->all(), 'id_pro', 'nm_pro');
    }
}
