<?php

use yii\db\Migration;

class m190621_124900_Classes_access extends Migration
{
    /**
     * @var array controller all actions
     */
    public $permisions = [
        "index" => [
            "name" => "contest_classes_index",
            "description" => "contest/classes/index"
        ],
        "view" => [
            "name" => "contest_classes_view",
            "description" => "contest/classes/view"
        ],
        "create" => [
            "name" => "contest_classes_create",
            "description" => "contest/classes/create"
        ],
        "update" => [
            "name" => "contest_classes_update",
            "description" => "contest/classes/update"
        ],
        "delete" => [
            "name" => "contest_classes_delete",
            "description" => "contest/classes/delete"
        ],
        "editable" => [
            "name" => "contest_classes_editable",
            "description" => "contest/classes/editable"
        ],
        "editable-column-update" => [
            "name" => "contest_classes_editable-column-update",
            "description" => "contest/classes/editable-column-update"
        ],
        "create-for-rel" => [
            "name" => "contest_classes_create-for-rel",
            "description" => "contest/classes/create-for-rel"
        ]
    ];
    
    /**
     * @var array roles and maping to actions/permisions
     */
    public $roles = [
        "ContestClassesFull" => [
            "index",
            "view",
            "create",
            "update",
            "delete",
            "editable",
            "editable-column-update",
            "create-for-rel"
        ],
        "ContestClassesView" => [
            "index",
            "view"
        ],
        "ContestClassesEdit" => [
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
