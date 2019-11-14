<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m191112_085357_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'Name' => $this ->text(),
            'is_active' => $this ->boolean()
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}