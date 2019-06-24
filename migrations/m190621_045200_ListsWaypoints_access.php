<?php

use yii\db\Migration;

class m190621_045200_ListsWaypoints_access extends Migration
{
    /**
     * @var array controller all actions
     */
    public $permisions = [
        "index" => [
            "name" => "app_lists-waypoints_index",
            "description" => "app/lists-waypoints/index"
        ],
        "view" => [
            "name" => "app_lists-waypoints_view",
            "description" => "app/lists-waypoints/view"
        ],
        "create" => [
            "name" => "app_lists-waypoints_create",
            "description" => "app/lists-waypoints/create"
        ],
        "update" => [
            "name" => "app_lists-waypoints_update",
            "description" => "app/lists-waypoints/update"
        ],
        "delete" => [
            "name" => "app_lists-waypoints_delete",
            "description" => "app/lists-waypoints/delete"
        ],
        "editable" => [
            "name" => "app_lists-waypoints_editable",
            "description" => "app/lists-waypoints/editable"
        ],
        "editable-column-update" => [
            "name" => "app_lists-waypoints_editable-column-update",
            "description" => "app/lists-waypoints/editable-column-update"
        ],
        "create-for-rel" => [
            "name" => "app_lists-waypoints_create-for-rel",
            "description" => "app/lists-waypoints/create-for-rel"
        ]
    ];
    
    /**
     * @var array roles and maping to actions/permisions
     */
    public $roles = [
        "AppListsWaypointsFull" => [
            "index",
            "view",
            "create",
            "update",
            "delete",
            "editable",
            "editable-column-update",
            "create-for-rel"
        ],
        "AppListsWaypointsView" => [
            "index",
            "view"
        ],
        "AppListsWaypointsEdit" => [
            "update",
            "create",
            "delete",
            "editable",
            "editable-column-update",
            "create-for-rel"
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
