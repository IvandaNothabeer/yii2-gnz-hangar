<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\modules\members\models\base;

use Yii;

/**
 * This is the base-model class for table "gnz_member".
 *
 * @property integer $id
 * @property integer $nzga_number
 * @property string $login_name
 * @property string $password
 * @property string $salt
 * @property string $access_level
 * @property integer $non_member
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $email
 * @property string $modified
 * @property string $created
 * @property string $membership_type
 * @property string $club
 * @property string $date_joined
 * @property string $gender
 * @property string $address_1
 * @property string $address_2
 * @property string $city
 * @property string $country
 * @property string $zip_post
 * @property string $date_of_birth
 * @property string $home_phone
 * @property string $mobile_phone
 * @property string $business_phone
 * @property integer $gnz_family_member_number
 * @property string $resigned
 * @property string $previous_clubs
 * @property string $resigned_comment
 * @property integer $instructor
 * @property string $instructor_rating
 * @property integer $aero_tow
 * @property integer $winch_rating
 * @property integer $self_launch
 * @property string $insttrain
 * @property string $observer_number
 * @property integer $tow_pilot
 * @property string $awards
 * @property integer $qgp_number
 * @property string $date_of_qgp
 * @property integer $silver_certificate_number
 * @property integer $silver_duration
 * @property integer $silver_distance
 * @property integer $silver_height
 * @property integer $gold_badge_number
 * @property integer $gold_distance
 * @property integer $gold_height
 * @property integer $diamond_distance_number
 * @property integer $diamond_height_number
 * @property integer $diamond_goal_number
 * @property integer $all_3_diamonds_number
 * @property integer $flight_1000km_number
 * @property integer $flight_1250km_number
 * @property integer $flight_1500km_number
 * @property integer $pending_approval
 * @property string $comments
 * @property integer $instructor_trainer
 * @property integer $tow_pilot_instructor
 * @property integer $aero_instructor
 * @property integer $advanced_aero_instructor
 * @property integer $auto_tow
 * @property integer $coach
 * @property integer $privacy
 * @property integer $contest_pilot
 * @property string $aliasModel
 */
abstract class Members extends \yii\db\ActiveRecord
{



    /**
    * ENUM field values
    */
    const ACCESS_LEVEL_MEMBER_ADMIN = 'MEMBER_ADMIN';
    const ACCESS_LEVEL_CLUB_ADMIN = 'CLUB_ADMIN';
    const ACCESS_LEVEL_AWARDS_OFFICER = 'AWARDS_OFFICER';
    const ACCESS_LEVEL_MAGAZINE_OFFICER = 'MAGAZINE_OFFICER';
    const ACCESS_LEVEL_NORMAL = 'NORMAL';
    const ACCESS_LEVEL_NATOPS_OFFICER = 'NATOPS_OFFICER';
    const GENDER_M = 'M';
    const GENDER_F = 'F';
    var $enum_labels = false;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gnz_member';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db_gnz');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nzga_number', 'non_member', 'gnz_family_member_number', 'instructor', 'aero_tow', 'winch_rating', 'self_launch', 'tow_pilot', 'qgp_number', 'silver_certificate_number', 'silver_duration', 'silver_distance', 'silver_height', 'gold_badge_number', 'gold_distance', 'gold_height', 'diamond_distance_number', 'diamond_height_number', 'diamond_goal_number', 'all_3_diamonds_number', 'flight_1000km_number', 'flight_1250km_number', 'flight_1500km_number', 'pending_approval', 'instructor_trainer', 'tow_pilot_instructor', 'aero_instructor', 'advanced_aero_instructor', 'auto_tow', 'coach', 'privacy', 'contest_pilot'], 'integer'],
            [['password', 'salt', 'access_level', 'first_name', 'last_name', 'email'], 'required'],
            [['access_level', 'gender', 'previous_clubs', 'resigned_comment', 'awards', 'comments'], 'string'],
            [['modified', 'created', 'date_joined', 'date_of_birth', 'resigned', 'date_of_qgp'], 'safe'],
            [['login_name', 'first_name', 'middle_name', 'last_name', 'email', 'membership_type'], 'string', 'max' => 64],
            [['password', 'salt'], 'string', 'max' => 40],
            [['club'], 'string', 'max' => 3],
            [['address_1', 'address_2', 'city'], 'string', 'max' => 50],
            [['country', 'zip_post', 'home_phone', 'mobile_phone', 'business_phone', 'insttrain', 'observer_number'], 'string', 'max' => 32],
            [['instructor_rating'], 'string', 'max' => 8],
            [['nzga_number'], 'unique'],
            [['login_name'], 'unique'],
            ['access_level', 'in', 'range' => [
                    self::ACCESS_LEVEL_MEMBER_ADMIN,
                    self::ACCESS_LEVEL_CLUB_ADMIN,
                    self::ACCESS_LEVEL_AWARDS_OFFICER,
                    self::ACCESS_LEVEL_MAGAZINE_OFFICER,
                    self::ACCESS_LEVEL_NORMAL,
                    self::ACCESS_LEVEL_NATOPS_OFFICER,
                ]
            ],
            ['gender', 'in', 'range' => [
                    self::GENDER_M,
                    self::GENDER_F,
                ]
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nzga_number' => 'Nzga Number',
            'login_name' => 'Login Name',
            'password' => 'Password',
            'salt' => 'Salt',
            'access_level' => 'Access Level',
            'non_member' => 'Non Member',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'modified' => 'Modified',
            'created' => 'Created',
            'membership_type' => 'Membership Type',
            'club' => 'Club',
            'date_joined' => 'Date Joined',
            'gender' => 'Gender',
            'address_1' => 'Address 1',
            'address_2' => 'Address 2',
            'city' => 'City',
            'country' => 'Country',
            'zip_post' => 'Zip Post',
            'date_of_birth' => 'Date Of Birth',
            'home_phone' => 'Home Phone',
            'mobile_phone' => 'Mobile Phone',
            'business_phone' => 'Business Phone',
            'gnz_family_member_number' => 'Gnz Family Member Number',
            'resigned' => 'Resigned',
            'previous_clubs' => 'Previous Clubs',
            'resigned_comment' => 'Resigned Comment',
            'instructor' => 'Instructor',
            'instructor_rating' => 'Instructor Rating',
            'aero_tow' => 'Aero Tow',
            'winch_rating' => 'Winch Rating',
            'self_launch' => 'Self Launch',
            'insttrain' => 'Insttrain',
            'observer_number' => 'Observer Number',
            'tow_pilot' => 'Tow Pilot',
            'awards' => 'Awards',
            'qgp_number' => 'Qgp Number',
            'date_of_qgp' => 'Date Of Qgp',
            'silver_certificate_number' => 'Silver Certificate Number',
            'silver_duration' => 'Silver Duration',
            'silver_distance' => 'Silver Distance',
            'silver_height' => 'Silver Height',
            'gold_badge_number' => 'Gold Badge Number',
            'gold_distance' => 'Gold Distance',
            'gold_height' => 'Gold Height',
            'diamond_distance_number' => 'Diamond Distance Number',
            'diamond_height_number' => 'Diamond Height Number',
            'diamond_goal_number' => 'Diamond Goal Number',
            'all_3_diamonds_number' => 'All 3 Diamonds Number',
            'flight_1000km_number' => 'Flight 1000km Number',
            'flight_1250km_number' => 'Flight 1250km Number',
            'flight_1500km_number' => 'Flight 1500km Number',
            'pending_approval' => 'Pending Approval',
            'comments' => 'Comments',
            'instructor_trainer' => 'Instructor Trainer',
            'tow_pilot_instructor' => 'Tow Pilot Instructor',
            'aero_instructor' => 'Aero Instructor',
            'advanced_aero_instructor' => 'Advanced Aero Instructor',
            'auto_tow' => 'Auto Tow',
            'coach' => 'Coach',
            'privacy' => 'Privacy',
            'contest_pilot' => 'Contest Pilot',
        ];
    }


    
    /**
     * @inheritdoc
     * @return \app\modules\members\models\MembersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\modules\members\models\MembersQuery(get_called_class());
    }


    /**
     * get column access_level enum value label
     * @param string $value
     * @return string
     */
    public static function getAccessLevelValueLabel($value){
        $labels = self::optsAccessLevel();
        if(isset($labels[$value])){
            return $labels[$value];
        }
        return $value;
    }

    /**
     * column access_level ENUM value labels
     * @return array
     */
    public static function optsAccessLevel()
    {
        return [
            self::ACCESS_LEVEL_MEMBER_ADMIN => self::ACCESS_LEVEL_MEMBER_ADMIN,
            self::ACCESS_LEVEL_CLUB_ADMIN => self::ACCESS_LEVEL_CLUB_ADMIN,
            self::ACCESS_LEVEL_AWARDS_OFFICER => self::ACCESS_LEVEL_AWARDS_OFFICER,
            self::ACCESS_LEVEL_MAGAZINE_OFFICER => self::ACCESS_LEVEL_MAGAZINE_OFFICER,
            self::ACCESS_LEVEL_NORMAL => self::ACCESS_LEVEL_NORMAL,
            self::ACCESS_LEVEL_NATOPS_OFFICER => self::ACCESS_LEVEL_NATOPS_OFFICER,
        ];
    }

    /**
     * get column gender enum value label
     * @param string $value
     * @return string
     */
    public static function getGenderValueLabel($value){
        $labels = self::optsGender();
        if(isset($labels[$value])){
            return $labels[$value];
        }
        return $value;
    }

    /**
     * column gender ENUM value labels
     * @return array
     */
    public static function optsGender()
    {
        return [
            self::GENDER_M => self::GENDER_M,
            self::GENDER_F => self::GENDER_F,
        ];
    }

}
