<?php

namespace app\modules\contest\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\contest\models\Entries;

/**
* EntriesSearch represents the model behind the search form about `app\modules\contest\models\Entries`.
*/
class EntriesSearch extends Entries
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'classes_id'], 'integer'],
            [['name', 'rego'], 'safe'],
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
$query = Entries::find();

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
            'classes_id' => $this->classes_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'rego', $this->rego]);

return $dataProvider;
}
}