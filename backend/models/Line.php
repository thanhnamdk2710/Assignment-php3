<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "line".
 *
 * @property int $id
 * @property string $name
 * @property string $start_time_operation
 * @property string $end_time_operation
 * @property int $vehicle_type
 * @property string $map
 *
 * @property VehicleType $vehicleType
 * @property Station[] $stations
 * @property Vehicle[] $vehicles
 */
class Line extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'line';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'start_time_operation', 'end_time_operation', 'vehicle_type'], 'required'],
            ['name', 'unique'],
            [['start_time_operation', 'end_time_operation'], 'safe'],
            [['vehicle_type'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['file'], 'file', 'extensions' => 'png, jpg, gif'],
            [['vehicle_type'], 'exist', 'skipOnError' => true, 'targetClass' => VehicleType::className(), 'targetAttribute' => ['vehicle_type' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'start_time_operation' => 'Start Time',
            'end_time_operation' => 'End Time',
            'vehicle_type' => 'Vehicle Type',
            'map' => 'Map',
        ];
    }

    public function getList()
    {
        $models = Line::find()->asArray()->all();
        return ArrayHelper::map($models, 'id', 'name');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleType()
    {
        return $this->hasOne(VehicleType::className(), ['id' => 'vehicle_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStations()
    {
        return $this->hasMany(Station::className(), ['line_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicles()
    {
        return $this->hasMany(Vehicle::className(), ['line_id' => 'id']);
    }
}
