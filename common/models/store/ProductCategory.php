<?php

namespace common\models\store;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "product_category".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class ProductCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên',
            'status' => 'Trạng Thái',
            'created_at' => 'Tạo Lúc',
            'updated_at' => 'Cập Nhật Lúc',
            'created_by' => 'Tạo Bởi',
            'updated_by' => 'Cập Nhật Bởi',
        ];
    }
//        public function getCreate(){
//        return $this->hasOne(User::className(), ['id' => 'created_by']);
//   }
}
