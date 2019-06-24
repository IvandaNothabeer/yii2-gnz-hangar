<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Waypoints;

/**
* WaypointsSearch represents the model behind the search form about `app\models\Waypoints`.
*/
class WaypointsSearch extends Waypoints
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'elevation', 'style', 'length', 'number', 'batch'], 'integer'],
            [['name', 'code', 'country', 'lat', 'lon', 'direction', 'frequency', 'description', 'created_at', 'updated_at', 'location'], 'safe'],
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
$query = Waypoints::find();

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
            'elevation' => $this->elevation,
            'style' => $this->style,
            'length' => $this->length,
            'number' => $this->number,
            'batch' => $this->batch,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'lat', $this->lat])
            ->andFilterWhere(['like', 'lon', $this->lon])
            ->andFilterWhere(['like', 'direction', $this->direction])
            ->andFilterWhere(['like', 'frequency', $this->frequency])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'location', $this->location]);

return $dataProvider;
}
}