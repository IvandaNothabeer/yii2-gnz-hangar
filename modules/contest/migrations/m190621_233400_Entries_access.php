<?php

use yii\db\Migration;

class m190621_233400_Entries_access extends Migration
{
    /**
     * @var array controller all actions
     */
    public $permisions = [
        "index" => [
            "name" => "contest_entries_index",
            "description" => "contest/entries/index"
        ],
        "view" => [
            "name" => "contest_entries_view",
            "description" => "contest/entries/view"
        ],
        "create" => [
            "name" => "contest_entries_create",
            "description" => "contest/entries/create"
        ],
        "update" => [
            "name" => "contest_entries_update",
            "description" => "contest/entries/update"
        ],
        "delete" => [
            "name" => "contest_entries_delete",
            "description" => "contest/entries/delete"
        ],
        "editable" => [
            "name" => "contest_entries_editable",
            "description" => "contest/entries/editable"
        ],
        "editable-column-update" => [
            "name" => "contest_entries_editable-column-update",
            "description" => "contest/entries/editable-column-update"
        ],
        "create-for-rel" => [
            "name" => "contest_entries_create-for-rel",
            "description" => "contest/entries/create-for-rel"
        ]
    ];
    
    /**
     * @var array roles and maping to actions/permisions
     */
    public $roles = [
        "ContestEntriesFull" => [
            "index",
            "view",
            "create",
            "update",
            "delete",
            "editable",
            "editable-column-update",
            "create-for-rel"
        ],
        "ContestEntriesView" => [
            "index",
            "view"
        ],
        "ContestEntriesEdit" => [
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
