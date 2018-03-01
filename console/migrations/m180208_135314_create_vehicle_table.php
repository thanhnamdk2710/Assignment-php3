<?php

use yii\db\Migration;

/**
 * Handles the creation of table `vehicle`.
 */
class m180208_135314_create_vehicle_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('vehicle', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()->unique(),
            'capacity' => $this->integer()->notNull(),
            'vehicle_type' => $this->integer()->notNull(),
            'line_id' => $this->integer()->notNull()
        ]);

        // Create index for column 'vechicle_type'
        $this->createIndex(
            'idx-vehicle-vehicle_type',
            'vehicle',
            'vehicle_type'
        );

        // add foreign key  table 'vehicle_type'
        $this->addForeignKey(
            'fk-vehicle-vehicle_type',
            'vehicle',
            'vehicle_type',
            'vehicle_type',
            'id',
            'CASCADE'
        );

        // Create index for column 'line_id'
        $this->createIndex(
            'idx-vehicle-line_id',
            'vehicle',
            'line_id'
        );

        // add foreign key  table 'line'
        $this->addForeignKey(
            'fk-vehicle-line_id',
            'vehicle',
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
        // drops foreign key for table `vehicle_type`
        $this->dropForeignKey(
            'fk-vehicle-vehicle_type',
            'vehicle'
        );

        // drops index for column `vehicle_type`
        $this->dropIndex(
            'idx-vehicle-vehicle_type',
            'vehicle'
        );

        // drops foreign key for table `vehicle_type`
        $this->dropForeignKey(
            'fk-vehicle-line_id',
            'vehicle'
        );

        // drops index for column `vehicle_type`
        $this->dropIndex(
            'idx-vehicle-line_id',
            'vehicle'
        );
        
        $this->dropTable('vehicle');
    }
}
