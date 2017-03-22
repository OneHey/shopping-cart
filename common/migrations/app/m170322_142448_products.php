<?php

use yii\db\Migration;

class m170322_142448_products extends Migration
{
    public function up()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'name' =>$this->string(255)->notNull(),
            'CategoryId' =>$this->integer()->notNull(),
            'Des' =>$this->text(),
            'img_url' =>$this->String(255),
            'img_path' =>$this->String(255),
            'status' =>$this->smallInteger()->defaultValue(1),
            'created_at' =>$this->integer(),
            'updated_at' =>$this->integer(),
            'created_by' =>$this->integer(),
            'updated_by' =>$this->integer(),
        ]);
    }

    public function down()
    {
        echo "m170322_142448_products cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
