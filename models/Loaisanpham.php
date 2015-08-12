<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loaisanpham".
 *
 * @property string $id_lsp
 * @property string $ten_loai
 */
class Loaisanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loaisanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_lsp', 'ten_loai'], 'required'],
            [['id_lsp'], 'string', 'max' => 10],
            [['ten_loai'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_lsp' => 'Id Lsp',
            'ten_loai' => 'Ten Loai',
        ];
    }
}
