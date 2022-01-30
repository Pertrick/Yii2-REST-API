<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comment}}`.
 */
class m220130_125935_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey(),
            'content' => $this->text(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'user_id' => $this->integer()->notNull(),
            'post_id' => $this->integer()->notNull(),
            
        ]);

        $this->addForeignKey('fk-comment-user_id', '{{%comment}}', 'user_id', '{{%user}}', 'id', 'CASCADE');
        $this->addForeignKey('fk-comment-post_id', '{{%comment}}', 'post_id', '{{%post}}', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-comment-user_id',
            'comment'
        );

        $this->dropForeignKey(
            'fk-comment-post_id',
            'comment'
        );
        $this->dropTable('{{%comment}}');
    }
}
