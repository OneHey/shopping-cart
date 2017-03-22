<?php

namespace common\models\store;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "sanpham".
 *
 * @property integer $id
 * @property string $name
 * @property integer $CategoryId
 * @property string $Des
 * @property string $img_url
 * @property string $img_path
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
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
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'CategoryId'], 'required'],
            [['CategoryId', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['Des'], 'string'],
            [['name', 'img_url', 'img_path'], 'string', 'max' => 255],
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
            'CategoryId' => 'Category ID',
            'Des' => 'Des',
            'img_url' => 'Img Url',
            'img_path' => 'Img Path',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
