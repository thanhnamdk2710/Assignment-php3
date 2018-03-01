<?php

use yii\db\Migration;

/**
 * Handles the creation of table `vehicle_type`.
 */
class m180208_131716_create_vehicle_type_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('vehicle_type', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('vehicle_type');
    }
}
