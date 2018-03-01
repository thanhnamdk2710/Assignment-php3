<?php

use yii\db\Migration;

/**
 * Class m180209_020034_insert_driver_table
 */
class m180209_020034_insert_driver_table extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->insert('driver', [
            'name' => 'GERHARD',
            'birth_date' => date('1981-10-05'),
            'phone' => '01676295617',
            'vehicle_id' => 1,
        ]);
        $this->insert('driver', [
            'name' => 'PLAMEN',
            'birth_date' => date('1981-10-05'),
            'phone' => '01676295617',
            'vehicle_id' => 2,
        ]);
        $this->insert('driver', [
            'name' => 'LEOPOLD LUTZ',
            'birth_date' => date('1981-10-05'),
            'phone' => '01676295617',
            'vehicle_id' => 3,
        ]);
        $this->insert('driver', [
            'name' => 'LOTHAR MARCEL',
            'birth_date' => date('1981-10-05'),
            'phone' => '01676295617',
            'vehicle_id' => 4,
        ]);
        $this->insert('driver', [
            'name' => 'DOLF DOMINIK',
            'birth_date' => date('1981-10-05'),
            'phone' => '01676295617',
            'vehicle_id' => 5,
        ]);
        $this->insert('driver', [
            'name' => 'ENGELBERT PHILIPP',
            'birth_date' => date('1981-10-05'),
            'phone' => '01676295617',
            'vehicle_id' => 6,
        ]);
        $this->insert('driver', [
            'name' => 'ELIAS EGON',
            'birth_date' => date('1981-10-05'),
            'phone' => '01676295617',
            'vehicle_id' => 7,
        ]);
        $this->insert('driver', [
            'name' => 'ELMAR WOLFGANG',
            'birth_date' => date('1981-10-05'),
            'phone' => '01676295617',
            'vehicle_id' => 8,
        ]);
        $this->insert('driver', [
            'name' => 'JOHANN OTTO',
            'birth_date' => date('1981-10-05'),
            'phone' => '01676295617',
            'vehicle_id' => 9,
        ]);
        $this->insert('driver', [
            'name' => 'CURD MAX',
            'birth_date' => date('1981-10-05'),
            'phone' => '01676295617',
            'vehicle_id' => 10,
        ]);
    }

    public function down()
    {
        return false;
    }
}
