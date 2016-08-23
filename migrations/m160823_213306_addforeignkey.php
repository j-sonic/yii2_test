<?php

use yii\db\Migration;

class m160823_213306_addforeignkey extends Migration
{
    public function up()
    {
      $this->addForeignKey('movies_director_id', 'movies', 'director_id', 'directors', 'id');
    }

    public function down()
    {
        echo "m160823_213306_addforeignkey cannot be reverted.\n";

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
