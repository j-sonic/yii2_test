<?php

use yii\db\Migration;

/**
 * Handles the creation for table `directors`.
 */
class m160822_114621_create_directors_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('directors', [
            'id' => $this->primaryKey(),
            'firstname' => $this->string(15)->notNull(),
            'lastname' => $this->string(50)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('directors');
    }
}
