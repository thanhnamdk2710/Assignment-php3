<?php

use yii\db\Migration;

/**
 * Handles the creation of table `driver`.
 */
class m180208_135852_create_driver_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('driver', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'birth_date' => $this->date()->notNull(),
            'phone' => $this->string(15)->notNull(),
            'avatar' => $this->string(50),
            'vehicle_id' => $this->integer()->notNull()
        ]);

        // Create index for column 'vehicle_id'
        $this->createIndex(
            'idx-driver-vehicle_id',
            'driver',
            'vehicle_id'
        );

        // add foreign key  table 'vehicle'
        $this->addForeignKey(
            'fk-driver-vehicle_id',
            'driver',
            'vehicle_id',
            'vehicle',
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
            'fk-driver-vehicle_id',
            'driver'
        );

        // drops index for column `line_id`
        $this->dropIndex(
            'idx-driver-vehicle_id',
            'driver'
        );

        $this->dropTable('driver');
    }
}
