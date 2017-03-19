<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m170319_110209_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product_category', [
            'id' => $this->primaryKey(),
            'name' =>$this->string(255),
            'status' =>$this->smallInteger()->defaultValue(1),
            'created_at' =>$this->integer(),
            'update_at' =>$this->integer(),
            'created_at' =>$this->integer(),
            'updated_at' =>$this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
