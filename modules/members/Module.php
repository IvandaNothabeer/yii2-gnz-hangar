<?php

namespace app\modules\members;

use dmstr\web\traits\AccessBehaviorTrait;

class Module extends \yii\base\Module
{
    use AccessBehaviorTrait;

    public $controllerNamespace = 'app\modules\members\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
