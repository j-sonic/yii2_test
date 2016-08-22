<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "directors".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 */
class Directors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'directors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname'], 'required'],
            [['firstname'], 'string', 'max' => 15],
            [['lastname'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
        ];
    }
}
