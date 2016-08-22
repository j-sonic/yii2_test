<?php

use yii\db\Migration;

/**
 * Handles the creation for table `movies`.
 */
class m160822_115926_create_movies_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('movies', [
            'id' => $this->primaryKey(),
            'name' => $this->string(30)->notNull(),
            'date_create' => $this->date(),
            'date_update' => $this->date(),
            'preview' => $this->text(),
            'date' => $this->date(),
            'director_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('movies');
    }
}
