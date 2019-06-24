<?php

namespace app\modules\members\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\members\models\Members;

/**
* MembersSearch represents the model behind the search form about `app\modules\members\models\Members`.
*/
class MembersSearch extends Members
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'nzga_number', 'non_member', 'gnz_family_member_number', 'instructor', 'aero_tow', 'winch_rating', 'self_launch', 'tow_pilot', 'qgp_number', 'silver_certificate_number', 'silver_duration', 'silver_distance', 'silver_height', 'gold_badge_number', 'gold_distance', 'gold_height', 'diamond_distance_number', 'diamond_height_number', 'diamond_goal_number', 'all_3_diamonds_number', 'flight_1000km_number', 'flight_1250km_number', 'flight_1500km_number', 'pending_approval', 'instructor_trainer', 'tow_pilot_instructor', 'aero_instructor', 'advanced_aero_instructor', 'auto_tow', 'coach', 'privacy', 'contest_pilot'], 'integer'],
            [['login_name', 'password', 'salt', 'access_level', 'first_name', 'middle_name', 'last_name', 'email', 'modified', 'created', 'membership_type', 'club', 'date_joined', 'gender', 'address_1', 'address_2', 'city', 'country', 'zip_post', 'date_of_birth', 'home_phone', 'mobile_phone', 'business_phone', 'resigned', 'previous_clubs', 'resigned_comment', 'instructor_rating', 'insttrain', 'observer_number', 'awards', 'date_of_qgp', 'comments'], 'safe'],
];
}

/**
* @inheritdoc
*/
public function scenarios()
{
// bypass scenarios() implementation in the parent class
return Model::scenarios();
}

/**
* Creates data provider instance with search query applied
*
* @param array $params
*
* @return ActiveDataProvider
*/
public function search($params)
{
$query = Members::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'id' => $this->id,
            'nzga_number' => $this->nzga_number,
            'non_member' => $this->non_member,
            'modified' => $this->modified,
            'created' => $this->created,
            'date_joined' => $this->date_joined,
            'date_of_birth' => $this->date_of_birth,
            'gnz_family_member_number' => $this->gnz_family_member_number,
            'resigned' => $this->resigned,
            'instructor' => $this->instructor,
            'aero_tow' => $this->aero_tow,
            'winch_rating' => $this->winch_rating,
            'self_launch' => $this->self_launch,
            'tow_pilot' => $this->tow_pilot,
            'qgp_number' => $this->qgp_number,
            'date_of_qgp' => $this->date_of_qgp,
            'silver_certificate_number' => $this->silver_certificate_number,
            'silver_duration' => $this->silver_duration,
            'silver_distance' => $this->silver_distance,
            'silver_height' => $this->silver_height,
            'gold_badge_number' => $this->gold_badge_number,
            'gold_distance' => $this->gold_distance,
            'gold_height' => $this->gold_height,
            'diamond_distance_number' => $this->diamond_distance_number,
            'diamond_height_number' => $this->diamond_height_number,
            'diamond_goal_number' => $this->diamond_goal_number,
            'all_3_diamonds_number' => $this->all_3_diamonds_number,
            'flight_1000km_number' => $this->flight_1000km_number,
            'flight_1250km_number' => $this->flight_1250km_number,
            'flight_1500km_number' => $this->flight_1500km_number,
            'pending_approval' => $this->pending_approval,
            'instructor_trainer' => $this->instructor_trainer,
            'tow_pilot_instructor' => $this->tow_pilot_instructor,
            'aero_instructor' => $this->aero_instructor,
            'advanced_aero_instructor' => $this->advanced_aero_instructor,
            'auto_tow' => $this->auto_tow,
            'coach' => $this->coach,
            'privacy' => $this->privacy,
            'contest_pilot' => $this->contest_pilot,
        ]);

        $query->andFilterWhere(['like', 'login_name', $this->login_name])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'salt', $this->salt])
            ->andFilterWhere(['like', 'access_level', $this->access_level])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'membership_type', $this->membership_type])
            ->andFilterWhere(['like', 'club', $this->club])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'address_1', $this->address_1])
            ->andFilterWhere(['like', 'address_2', $this->address_2])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'zip_post', $this->zip_post])
            ->andFilterWhere(['like', 'home_phone', $this->home_phone])
            ->andFilterWhere(['like', 'mobile_phone', $this->mobile_phone])
            ->andFilterWhere(['like', 'business_phone', $this->business_phone])
            ->andFilterWhere(['like', 'previous_clubs', $this->previous_clubs])
            ->andFilterWhere(['like', 'resigned_comment', $this->resigned_comment])
            ->andFilterWhere(['like', 'instructor_rating', $this->instructor_rating])
            ->andFilterWhere(['like', 'insttrain', $this->insttrain])
            ->andFilterWhere(['like', 'observer_number', $this->observer_number])
            ->andFilterWhere(['like', 'awards', $this->awards])
            ->andFilterWhere(['like', 'comments', $this->comments]);

return $dataProvider;
}
}