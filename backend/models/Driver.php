<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "driver".
 *
 * @property int $id
 * @property string $name
 * @property string $birth_date
 * @property string $phone
 * @property string $avatar
 * @property int $vehicle_id
 *
 * @property Vehicle $vehicle
 */
class Driver extends \yii\db\ActiveRecord
{
    public $file;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'birth_date', 'phone', 'vehicle_id'], 'required'],
            [['birth_date'], 'safe'],
            [['vehicle_id'], 'integer'],
            [['name', 'avatar'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 15],
            [['vehicle_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vehicle::className(), 'targetAttribute' => ['vehicle_id' => 'id']],
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
            'birth_date' => 'Birth Date',
            'phone' => 'Phone',
            'avatar' => 'Avatar',
            'vehicle_id' => 'Vehicle',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicle()
    {
        return $this->hasOne(Vehicle::className(), ['id' => 'vehicle_id']);
    }
}
