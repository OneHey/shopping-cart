<?php

namespace common\models\store;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $name
 * @property integer $CategoryId
 * @property string $Slug
 * @property double $prince
 * @property string $Des
 * @property string $img_url
 * @property string $img_path
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'CategoryId', 'Slug'], 'required'],
            [['CategoryId', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['prince'], 'number'],
            [['Des'], 'string'],
            [['name', 'Slug', 'img_url', 'img_path'], 'string', 'max' => 255],
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
            'Slug' => 'Slug',
            'prince' => 'Prince',
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
