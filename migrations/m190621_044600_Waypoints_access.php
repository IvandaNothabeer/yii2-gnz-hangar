<?php

use yii\db\Migration;

class m190621_044600_Waypoints_access extends Migration
{
    /**
     * @var array controller all actions
     */
    public $permisions = [
        "index" => [
            "name" => "app_waypoints_index",
            "description" => "app/waypoints/index"
        ],
        "view" => [
            "name" => "app_waypoints_view",
            "description" => "app/waypoints/view"
        ],
        "create" => [
            "name" => "app_waypoints_create",
            "description" => "app/waypoints/create"
        ],
        "update" => [
            "name" => "app_waypoints_update",
            "description" => "app/waypoints/update"
        ],
        "delete" => [
            "name" => "app_waypoints_delete",
            "description" => "app/waypoints/delete"
        ]
    ];
    
    /**
     * @var array roles and maping to actions/permisions
     */
    public $roles = [
        "AppWaypointsFull" => [
            "index",
            "view",
            "create",
            "update",
            "delete"
        ],
        "AppWaypointsView" => [
            "index",
            "view"
        ],
        "AppWaypointsEdit" => [
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
