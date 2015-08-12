<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sanpham".
 *
 * @property string $id_sp
 * @property integer $id_lsp
 * @property string $ten_sp
 * @property string $gia
 * @property string $mota
 *
 * @property Chitiethoadon[] $chitiethoadons
 */
class Sanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sp', 'id_lsp', 'ten_sp', 'gia', 'mota'], 'required'],
            [['id_lsp'], 'integer'],
            [['id_sp'], 'string', 'max' => 10],
            [['ten_sp'], 'string', 'max' => 50],
            [['gia'], 'string', 'max' => 20],
            [['mota'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_sp' => 'Id Sp',
            'id_lsp' => 'Id Lsp',
            'ten_sp' => 'Ten Sp',
            'gia' => 'Gia',
            'mota' => 'Mota',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChitiethoadons()
    {
        return $this->hasMany(Chitiethoadon::className(), ['id_sp' => 'id_sp']);
    }
}
