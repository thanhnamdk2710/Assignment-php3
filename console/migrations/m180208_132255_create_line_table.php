<?php

use yii\db\Migration;

/**
 * Handles the creation of table `line`.
 */
class m180208_132255_create_line_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('line', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()->unique(),
            'start_time_operation' => $this->time()->notNull(),
            'end_time_operation' => $this->time()->notNull(),
            'vehicle_type' => $this->integer()->notNull(),
            'map' => $this->string(50)->notNull()
        ]);

        // Create index for column 'vechicle_type'
        $this->createIndex(
            'idx-line-vehicle_type',
            'line',
            'vehicle_type'
        );

        // add foreign key  table 'vehicle_type'
        $this->addForeignKey(
            'fk-line-vehicle_type',
            'line',
            'vehicle_type',
            'vehicle_type',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `vehicle_type`
        $this->dropForeignKey(
            'fk-line-vehicle_type',
            'line'
        );

        // drops index for column `vehicle_type`
        $this->dropIndex(
            'idx-line-vehicle_type',
            'line'
        );

        $this->dropTable('line');
    }
}
