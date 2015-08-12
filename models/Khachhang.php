<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "khachhang".
 *
 * @property string $id_kh
 * @property string $ten_kh
 * @property string $sdt
 * @property string $diachi
 * @property string $email
 *
 * @property Hoadon[] $hoadons
 */
class Khachhang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'khachhang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kh', 'ten_kh', 'sdt', 'diachi', 'email'], 'required'],
            [['id_kh'], 'string', 'max' => 10],
            [['ten_kh'], 'string', 'max' => 50],
            [['sdt'], 'string', 'max' => 11],
            [['diachi'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kh' => 'Id Kh',
            'ten_kh' => 'Ten Kh',
            'sdt' => 'Sdt',
            'diachi' => 'Diachi',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoadons()
    {
        return $this->hasMany(Hoadon::className(), ['id_kh' => 'id_kh']);
    }
}
