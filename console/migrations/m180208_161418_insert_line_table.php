<?php

use yii\db\Migration;

/**
 * Class m180208_161418_insert_line_table
 */
class m180208_161418_insert_line_table extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->insert('line', [
            'name' => 'Line T22',
            'start_time_operation' => '06:00:00',
            'end_time_operation' => '18:00:00',
            'vehicle_type' => 1,
            'map' => 'lineT22.PNG'
        ]);
        $this->insert('line', [
            'name' => 'Line A33',
            'start_time_operation' => '06:00:00',
            'end_time_operation' => '18:00:00',
            'vehicle_type' => 2,
            'map' => 'lineA33.PNG'
        ]);
        $this->insert('line', [
            'name' => 'Line N45',
            'start_time_operation' => '06:00:00',
            'end_time_operation' => '18:00:00',
            'vehicle_type' => 3,
            'map' => 'lineN45.PNG'
        ]);
        $this->insert('line', [
            'name' => 'Line R87',
            'start_time_operation' => '06:00:00',
            'end_time_operation' => '18:00:00',
            'vehicle_type' => 4,
            'map' => 'lineR87.PNG'
        ]);
    }

    public function down()
    {
        return false;
    }
}
