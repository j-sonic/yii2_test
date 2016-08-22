<?php

use yii\db\Migration;

class m160822_123550_mjsonic_insert_directors_table extends Migration
{
    public function up()
    {
        $this->batchInsert( 'directors', ['firstname', 'lastname'], [['Стивен', 'Спилберг'], ['Джеймс', 'Кэмерон'], ['Квентин', 'Тарантино'], ['Никита', 'Михалков']] );
    }

    public function down()
    {
        $this->truncateTable( 'directors' );
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
