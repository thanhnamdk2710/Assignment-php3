<?php

use yii\db\Migration;

/**
 * Class m180209_015417_insert_vehicle_table
 */
class m180209_015417_insert_vehicle_table extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->insert('vehicle', [
            'name' => 'LVB-T101',
            'capacity' => 300,
            'vehicle_type' => 1,
            'line_id' => 1,
        ]);
        $this->insert('vehicle', [
            'name' => 'LVB-T102',
            'capacity' => 300,
            'vehicle_type' => 1,
            'line_id' => 1,
        ]);
        $this->insert('vehicle', [
            'name' => 'LVB-T103',
            'capacity' => 300,
            'vehicle_type' => 1,
            'line_id' => 1,
        ]);
        $this->insert('vehicle', [
            'name' => 'LVB-T104',
            'capacity' => 300,
            'vehicle_type' => 1,
            'line_id' => 1,
        ]);
        $this->insert('vehicle', [
            'name' => 'LVB-T105',
            'capacity' => 300,
            'vehicle_type' => 1,
            'line_id' => 1,
        ]);
        $this->insert('vehicle', [
            'name' => 'LVB-B201',
            'capacity' => 300,
            'vehicle_type' => 2,
            'line_id' => 2,
        ]);
        $this->insert('vehicle', [
            'name' => 'LVB-B202',
            'capacity' => 300,
            'vehicle_type' => 2,
            'line_id' => 2,
        ]);$this->insert('vehicle', [
            'name' => 'LVB-B203',
            'capacity' => 300,
            'vehicle_type' => 2,
            'line_id' => 2,
        ]);$this->insert('vehicle', [
            'name' => 'LVB-B204',
            'capacity' => 300,
            'vehicle_type' => 2,
            'line_id' => 2,
        ]);$this->insert('vehicle', [
            'name' => 'LVB-B205',
            'capacity' => 300,
            'vehicle_type' => 2,
            'line_id' => 2,
        ]);
        $this->insert('vehicle', [
            'name' => 'LVB-N301',
            'capacity' => 300,
            'vehicle_type' => 3,
            'line_id' => 3,
        ]);
        $this->insert('vehicle', [
            'name' => 'LVB-N302',
            'capacity' => 300,
            'vehicle_type' => 3,
            'line_id' => 3,
        ]);
        $this->insert('vehicle', [
            'name' => 'LVB-N303',
            'capacity' => 300,
            'vehicle_type' => 3,
            'line_id' => 3,
        ]);
        $this->insert('vehicle', [
            'name' => 'LVB-N304',
            'capacity' => 300,
            'vehicle_type' => 3,
            'line_id' => 3,
        ]);
        $this->insert('vehicle', [
            'name' => 'LVB-N305',
            'capacity' => 300,
            'vehicle_type' => 3,
            'line_id' => 3,
        ]);
        $this->insert('vehicle', [
            'name' => 'LVB-R401',
            'capacity' => 300,
            'vehicle_type' => 4,
            'line_id' => 4,
        ]);
        $this->insert('vehicle', [
            'name' => 'LVB-R402',
            'capacity' => 300,
            'vehicle_type' => 4,
            'line_id' => 4,
        ]);
        $this->insert('vehicle', [
            'name' => 'LVB-R403',
            'capacity' => 300,
            'vehicle_type' => 4,
            'line_id' => 4,
        ]);
        $this->insert('vehicle', [
            'name' => 'LVB-R404',
            'capacity' => 300,
            'vehicle_type' => 4,
            'line_id' => 4,
        ]);
        $this->insert('vehicle', [
            'name' => 'LVB-R405',
            'capacity' => 300,
            'vehicle_type' => 4,
            'line_id' => 4,
        ]);
    }

    public function down()
    {
        return false;
    }
}
