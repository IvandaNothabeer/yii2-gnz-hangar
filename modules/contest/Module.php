<?php

namespace app\modules\contest;

use dmstr\web\traits\AccessBehaviorTrait;

class Module extends \yii\base\Module
{
    use AccessBehaviorTrait;

    public $controllerNamespace = 'app\modules\contest\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
