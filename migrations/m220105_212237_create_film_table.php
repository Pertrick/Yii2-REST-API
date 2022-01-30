<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%film}}`.
 */
class m220105_212237_create_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%film}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(64)->notNull(),
            'release_year' => $this->integer(4)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%film}}');
    }
}
