<?php

use yii\db\Migration;

class m190621_124800_Contests_access extends Migration
{
    /**
     * @var array controller all actions
     */
    public $permisions = [
        "index" => [
            "name" => "contest_contests_index",
            "description" => "contest/contests/index"
        ],
        "view" => [
            "name" => "contest_contests_view",
            "description" => "contest/contests/view"
        ],
        "create" => [
            "name" => "contest_contests_create",
            "description" => "contest/contests/create"
        ],
        "update" => [
            "name" => "contest_contests_update",
            "description" => "contest/contests/update"
        ],
        "delete" => [
            "name" => "contest_contests_delete",
            "description" => "contest/contests/delete"
        ],
        "editable" => [
            "name" => "contest_contests_editable",
            "description" => "contest/contests/editable"
        ],
        "editable-column-update" => [
            "name" => "contest_contests_editable-column-update",
            "description" => "contest/contests/editable-column-update"
        ],
        "create-for-rel" => [
            "name" => "contest_contests_create-for-rel",
            "description" => "contest/contests/create-for-rel"
        ]
    ];
    
    /**
     * @var array roles and maping to actions/permisions
     */
    public $roles = [
        "ContestContestsFull" => [
            "index",
            "view",
            "create",
            "update",
            "delete",
            "editable",
            "editable-column-update",
            "create-for-rel"
        ],
        "ContestContestsView" => [
            "index",
            "view"
        ],
        "ContestContestsEdit" => [
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
