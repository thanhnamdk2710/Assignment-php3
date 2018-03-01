<?php

use yii\db\Migration;

/**
 * Class m180208_153947_insert_vehicle_type_table
 */
class m180208_153947_insert_vehicle_type_table extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->insert('vehicle_type', ['name' => 'Tram']);
        $this->insert('vehicle_type', ['name' => 'Bus']);
        $this->insert('vehicle_type', ['name' => 'NightLine']);
        $this->insert('vehicle_type', ['name' => 'RegionalBus']);
    }

    public function down()
    {
        return false;
    }
}
