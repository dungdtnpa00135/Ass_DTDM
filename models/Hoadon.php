<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hoadon".
 *
 * @property string $id_hd
 * @property string $id_kh
 * @property string $ngaymua
 *
 * @property Chitiethoadon[] $chitiethoadons
 * @property Khachhang $idKh
 */
class Hoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_hd', 'id_kh', 'ngaymua'], 'required'],
            [['ngaymua'], 'safe'],
            [['id_hd', 'id_kh'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_hd' => 'Id Hd',
            'id_kh' => 'Id Kh',
            'ngaymua' => 'Ngaymua',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChitiethoadons()
    {
        return $this->hasMany(Chitiethoadon::className(), ['id_hd' => 'id_hd']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKh()
    {
        return $this->hasOne(Khachhang::className(), ['id_kh' => 'id_kh']);
    }
}
