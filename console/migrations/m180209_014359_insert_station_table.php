<?php

use yii\db\Migration;

/**
 * Class m180209_014359_insert_station_table
 */
class m180209_014359_insert_station_table extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->insert('station', [
            'name' => 'Wahren',
            'position_station' => 0,
            'line_id' => 1,
        ]);
        $this->insert('station', [
            'name' => 'Wiederitzscher Str.',
            'position_station' => 1,
            'line_id' => 1,
        ]);
        $this->insert('station', [
            'name' => 'Hohe Str,LVB',
            'position_station' => 1,
            'line_id' => 1,
        ]);
        $this->insert('station', [
            'name' => 'Connewitz,Kreuz',
            'position_station' => 1,
            'line_id' => 1,
        ]);
        $this->insert('station', [
            'name' => 'Wiedebachplatz',
            'position_station' => 1,
            'line_id' => 1,
        ]);
        $this->insert('station', [
            'name' => 'Triftweg-T1',
            'position_station' => 1,
            'line_id' => 1,
        ]);
        $this->insert('station', [
            'name' => 'Wildpark',
            'position_station' => 2,
            'line_id' => 1,
        ]);
        $this->insert('station', [
            'name' => 'Messe-gelende',
            'position_station' => 0,
            'line_id' => 2,
        ]);
        $this->insert('station', [
            'name' => 'Wiederitzsch-Mitte',
            'position_station' => 1,
            'line_id' => 2,
        ]);
        $this->insert('station', [
            'name' => 'Wilhelminesnstr',
            'position_station' => 1,
            'line_id' => 2,
        ]);
        $this->insert('station', [
            'name' => 'Lucition',
            'position_station' => 1,
            'line_id' => 2,
        ]);
        $this->insert('station', [
            'name' => 'Pobplatz',
            'position_station' => 1,
            'line_id' => 2,
        ]);
        $this->insert('station', [
            'name' => 'National',
            'position_station' => 1,
            'line_id' => 2,
        ]);
        $this->insert('station', [
            'name' => 'Triftweg-T2',
            'position_station' => 2,
            'line_id' => 2,
        ]);
        $this->insert('station', [
            'name' => 'Lobnig',
            'position_station' => 0,
            'line_id' => 3,
        ]);
        $this->insert('station', [
            'name' => 'Gohlis-Nord',
            'position_station' => 1,
            'line_id' => 3,
        ]);
        $this->insert('station', [
            'name' => 'Gott-schalstr',
            'position_station' => 1,
            'line_id' => 3,
        ]);
        $this->insert('station', [
            'name' => 'S-Bf. Gohlis',
            'position_station' => 1,
            'line_id' => 3,
        ]);
        $this->insert('station', [
            'name' => 'Nordplatz',
            'position_station' => 1,
            'line_id' => 3,
        ]);
        $this->insert('station', [
            'name' => 'Lortzingstr',
            'position_station' => 1,
            'line_id' => 3,
        ]);
        $this->insert('station', [
            'name' => 'Zoo',
            'position_station' => 2,
            'line_id' => 3,
        ]);
    }

    public function down()
    {
        return false;
    }
}
