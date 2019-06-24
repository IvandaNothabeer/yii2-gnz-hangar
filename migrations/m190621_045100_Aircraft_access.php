<?php

use yii\db\Migration;

class m190621_045100_Aircraft_access extends Migration
{
    /**
     * @var array controller all actions
     */
    public $permisions = [
        "index" => [
            "name" => "app_aircraft_index",
            "description" => "app/aircraft/index"
        ],
        "view" => [
            "name" => "app_aircraft_view",
            "description" => "app/aircraft/view"
        ],
        "create" => [
            "name" => "app_aircraft_create",
            "description" => "app/aircraft/create"
        ],
        "update" => [
            "name" => "app_aircraft_update",
            "description" => "app/aircraft/update"
        ],
        "delete" => [
            "name" => "app_aircraft_delete",
            "description" => "app/aircraft/delete"
        ]
    ];
    
    /**
     * @var array roles and maping to actions/permisions
     */
    public $roles = [
        "AppAircraftFull" => [
            "index",
            "view",
            "create",
            "update",
            "delete"
        ],
        "AppAircraftView" => [
            "index",
            "view"
        ],
        "AppAircraftEdit" => [
            "update",
            "create",
            "delete"
        ]
    ];
    
    public function up()
    {
        
        $permisions = [];
        $auth = \Yii::$app->authManager;

        /**
         * create permisions for each controller action
         */
        foreach ($this->permisions as $action => $permission) {
            $permisions[$action] = $auth->createPermission($permission['name']);
            $permisions[$action]->description = $permission['description'];
            $auth->add($permisions[$action]);
        }

        /**
         *  create roles
         */
        foreach ($this->roles as $roleName => $actions) {
            $role = $auth->createRole($roleName);
            $auth->add($role);

            /**
             *  to role assign permissions
             */
            foreach ($actions as $action) {
                $auth->addChild($role, $permisions[$action]);
            }
        }
    }

    public function down() {
        $auth = Yii::$app->authManager;

        foreach ($this->roles as $roleName => $actions) {
            $role = $auth->createRole($roleName);
            $auth->remove($role);
        }

        foreach ($this->permisions as $permission) {
            $authItem = $auth->createPermission($permission['name']);
            $auth->remove($authItem);
        }
    }
}
