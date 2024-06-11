<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property int $id
 * @property int $title
 * @property string $date
 * @property string $organizers
 * @property string $description
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'date', 'organizers', 'description'], 'required'],
            [['title'], 'integer'],
            [['date'], 'safe'],
            [['description'], 'string'],
            [['organizers'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'date' => 'Date',
            'organizers' => 'Organizers',
            'description' => 'Description',
        ];
    }
}
