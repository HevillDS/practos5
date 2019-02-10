<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%iphone}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%shop}}`
 */
class m190210_163157_create_iphone_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%iphone}}', [
            'iphone_id' => $this->primaryKey(),
            'model' => $this->string(),
            'description' => $this->text(),
            'rating' => $this->integer(),
            'shop_id' => $this->integer(),
        ]);

        // creates index for column `shop_id`
        $this->createIndex(
            '{{%idx-iphone-shop_id}}',
            '{{%iphone}}',
            'shop_id'
        );

        // add foreign key for table `{{%shop}}`
        $this->addForeignKey(
            '{{%fk-iphone-shop_id}}',
            '{{%iphone}}',
            'shop_id',
            '{{%shop}}',
            'shop_id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%shop}}`
        $this->dropForeignKey(
            '{{%fk-iphone-shop_id}}',
            '{{%iphone}}'
        );

        // drops index for column `shop_id`
        $this->dropIndex(
            '{{%idx-iphone-shop_id}}',
            '{{%iphone}}'
        );

        $this->dropTable('{{%iphone}}');
    }
}
