<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ingredients_to_dishes}}`.
 */
class m200131_070429_create_ingredients_to_dishes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ingredients_to_dishes}}', [
            'id' => $this->primaryKey(),
            'ingredient_id' => $this->integer(),
            'dish_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ingredients_to_dishes}}');
    }
}
