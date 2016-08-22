<?php

use yii\db\Migration;

/**
 * Handles the creation for table `movies`.
 */
class mjsonic_insert_directors_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {

        $this->batchInsert( 'movies', ['firstname', 'lastname'], [['Стивен', 'Спилберг'], ['Джеймс', 'Кэмерон'], ['Квентин', 'Тарантино'], ['Никита', 'Михалков']] );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {

    }
}
