<?php

use yii\db\Migration;

/**
 * Handles the creation of table `station`.
 */
class m180208_134228_create_station_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('station', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()->unique(),
            'position_station' => $this->integer()->notNull(), // 0: Start, 1: Inter, 2: End
            'line_id' => $this->integer()->notNull()
        ]);

        // Create index for column 'line_id'
        $this->createIndex(
            'idx-station-line_id',
            'station',
            'line_id'
        );

        // add foreign key  table 'line_id'
        $this->addForeignKey(
            'fk-station-line_id',
            'station',
            'line_id',
            'line',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `line_id`
        $this->dropForeignKey(
            'fk-station-line_id',
            'station'
        );

        // drops index for column `line_id`
        $this->dropIndex(
            'idx-station-line_id',
            'station'
        );

        $this->dropTable('station');
    }
}
