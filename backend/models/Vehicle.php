<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "vehicle".
 *
 * @property int $id
 * @property string $name
 * @property int $capacity
 * @property int $vehicle_type
 * @property int $line_id
 *
 * @property Driver[] $drivers
 * @property Line $line
 * @property VehicleType $vehicleType
 */
class Vehicle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehicle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'capacity', 'vehicle_type', 'line_id'], 'required'],
            [['capacity', 'vehicle_type', 'line_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['name'], 'unique'],
            [['line_id'], 'exist', 'skipOnError' => true, 'targetClass' => Line::className(), 'targetAttribute' => ['line_id' => 'id']],
            [['vehicle_type'], 'exist', 'skipOnError' => true, 'targetClass' => VehicleType::className(), 'targetAttribute' => ['vehicle_type' => 'id']],
        ];
    }

    public function getList()
    {
        $models = Vehicle::find()->asArray()->all();
        return ArrayHelper::map($models, 'id', 'name');
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'capacity' => 'Capacity',
            'vehicle_type' => 'Vehicle Type',
            'line_id' => 'Line',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrivers()
    {
        return $this->hasMany(Driver::className(), ['vehicle_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLine()
    {
        return $this->hasOne(Line::className(), ['id' => 'line_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleType()
    {
        return $this->hasOne(VehicleType::className(), ['id' => 'vehicle_type']);
    }
}
