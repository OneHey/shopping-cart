<?php

namespace common\models\store;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
/**
 * This is the model class for table "product_category".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 * @property integer $created_at
 * @property integer $update_at
 * @property integer $updated_at
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

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            BlameableBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        ['name','required'],
            [['status', 'created_at', 'update_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'status' => 'Status',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
            'updated_at' => 'Updated At',
        ];
    }
    public function getCreate(){
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
}
