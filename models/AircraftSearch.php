<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Aircraft;

/**
* AircraftSearch represents the model behind the search form about `app\models\Aircraft`.
*/
class AircraftSearch extends Aircraft
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'seats', 'towplane', 'self_launcher', 'sustainer', 'retractable', 'vintage', 'jet', 'electric'], 'integer'],
            [['rego', 'contest_id', 'manufacturer', 'model', 'serial', 'mctow', 'class', 'transponder', 'trailer', 'owner', 'location', 'annual_inspection_due', 'annual_airworthiness_due', 'radio_due', 'transponder_due', 'altimeter_due', 'created_at', 'updated_at', 'flarm', 'spot_feed_id', 'spot_esn', 'spot_active', 'particle_id'], 'safe'],
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
$query = Aircraft::find();

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
            'annual_inspection_due' => $this->annual_inspection_due,
            'annual_airworthiness_due' => $this->annual_airworthiness_due,
            'radio_due' => $this->radio_due,
            'transponder_due' => $this->transponder_due,
            'altimeter_due' => $this->altimeter_due,
            'seats' => $this->seats,
            'towplane' => $this->towplane,
            'self_launcher' => $this->self_launcher,
            'sustainer' => $this->sustainer,
            'retractable' => $this->retractable,
            'vintage' => $this->vintage,
            'jet' => $this->jet,
            'electric' => $this->electric,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'spot_active' => $this->spot_active,
        ]);

        $query->andFilterWhere(['like', 'rego', $this->rego])
            ->andFilterWhere(['like', 'contest_id', $this->contest_id])
            ->andFilterWhere(['like', 'manufacturer', $this->manufacturer])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'mctow', $this->mctow])
            ->andFilterWhere(['like', 'class', $this->class])
            ->andFilterWhere(['like', 'transponder', $this->transponder])
            ->andFilterWhere(['like', 'trailer', $this->trailer])
            ->andFilterWhere(['like', 'owner', $this->owner])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'flarm', $this->flarm])
            ->andFilterWhere(['like', 'spot_feed_id', $this->spot_feed_id])
            ->andFilterWhere(['like', 'spot_esn', $this->spot_esn])
            ->andFilterWhere(['like', 'particle_id', $this->particle_id]);

return $dataProvider;
}
}