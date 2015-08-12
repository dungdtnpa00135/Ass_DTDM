<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chitiethoadon".
 *
 * @property string $id_cthd
 * @property string $id_hd
 * @property string $id_sp
 * @property integer $soluong
 *
 * @property Hoadon $idHd
 * @property Sanpham $idSp
 */
class Chitiethoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chitiethoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cthd', 'id_hd', 'id_sp', 'soluong'], 'required'],
            [['soluong'], 'integer'],
            [['id_cthd', 'id_hd', 'id_sp'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cthd' => 'Id Cthd',
            'id_hd' => 'Id Hd',
            'id_sp' => 'Id Sp',
            'soluong' => 'Soluong',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdHd()
    {
        return $this->hasOne(Hoadon::className(), ['id_hd' => 'id_hd']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSp()
    {
        return $this->hasOne(Sanpham::className(), ['id_sp' => 'id_sp']);
    }
}
