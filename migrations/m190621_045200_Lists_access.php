<?php

use yii\db\Migration;

class m190621_045200_Lists_access extends Migration
{
    /**
     * @var array controller all actions
     */
    public $permisions = [
        "index" => [
            "name" => "app_lists_index",
            "description" => "app/lists/index"
        ],
        "view" => [
            "name" => "app_lists_view",
            "description" => "app/lists/view"
        ],
        "create" => [
            "name" => "app_lists_create",
            "description" => "app/lists/create"
        ],
        "update" => [
            "name" => "app_lists_update",
            "description" => "app/lists/update"
        ],
        "delete" => [
            "name" => "app_lists_delete",
            "description" => "app/lists/delete"
        ]
    ];
    
    /**
     * @var array roles and maping to actions/permisions
     */
    public $roles = [
        "AppListsFull" => [
            "index",
            "view",
            "create",
            "update",
            "delete"
        ],
        "AppListsView" => [
            "index",
            "view"
        ],
        "AppListsEdit" => [
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
