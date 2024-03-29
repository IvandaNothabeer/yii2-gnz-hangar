<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\modules\contest\models\base;

use Yii;

/**
 * This is the base-model class for table "entries".
 *
 * @property integer $id
 * @property integer $classes_id
 * @property integer $contest_id
 * @property string $name
 * @property string $rego
 *
 * @property \app\modules\contest\models\Classes $classes
 * @property \app\modules\contest\models\Contests $contest
 * @property string $aliasModel
 */
abstract class Entries extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'entries';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['classes_id', 'contest_id', 'name', 'rego'], 'required'],
            [['classes_id', 'contest_id'], 'integer'],
            [['name'], 'string', 'max' => 120],
            [['rego'], 'string', 'max' => 3],
            [['classes_id'], 'exist', 'skipOnError' => true, 'targetClass' => \app\modules\contest\models\Classes::className(), 'targetAttribute' => ['classes_id' => 'id']],
            [['contest_id'], 'exist', 'skipOnError' => true, 'targetClass' => \app\modules\contest\models\Contests::className(), 'targetAttribute' => ['contest_id' => 'id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'classes_id' => 'Classes ID',
            'contest_id' => 'Contest',
            'name' => 'Competitor',
            'rego' => 'Glider Registration',
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return array_merge(parent::attributeHints(), [
            'contest_id' => 'Contest',
            'name' => 'Competitor',
            'rego' => 'Glider Registration',
        ]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasses()
    {
        return $this->hasOne(\app\modules\contest\models\Classes::className(), ['id' => 'classes_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContest()
    {
        return $this->hasOne(\app\modules\contest\models\Contests::className(), ['id' => 'contest_id']);
    }


    
    /**
     * @inheritdoc
     * @return \app\modules\contest\models\EntriesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\modules\contest\models\EntriesQuery(get_called_class());
    }


}
