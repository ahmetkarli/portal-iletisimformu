<?php

namespace kouosl\iletisimformu\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property string $name
 * @property string $birthday
 * @property string $mail
 * @property int $tel
 * @property string $preference
 * @property string $departmant
 * @property string $subject
 * @property string $title
 * @property string $message
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'birthday', 'mail', 'tel', 'preference', 'departmant', 'subject', 'title', 'message'], 'required'],
            [['tel'], 'integer'],
            [['name', 'mail', 'preference', 'departmant', 'subject', 'title'], 'string', 'max' => 50],
            [['birthday'], 'string', 'max' => 20],
            [['message'], 'string', 'max' => 255],
            [['mail', 'tel'], 'unique', 'targetAttribute' => ['mail', 'tel']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'birthday' => 'Birthday',
            'mail' => 'Mail',
            'tel' => 'Tel',
            'preference' => 'Preference',
            'departmant' => 'Departmant',
            'subject' => 'Subject',
            'title' => 'Title',
            'message' => 'Message',
        ];
    }
}
