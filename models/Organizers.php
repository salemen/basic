<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organizers".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $phone
 * @property string $events
 */
class Organizers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organizers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'events'], 'required'],
            [['name', 'events'], 'string'],
            [['phone'], 'integer'],
            [['email'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'events' => 'Events',
        ];
    }
}
