<?php

use yii\db\Migration;

class m190622_110000_Member_access extends Migration
{
    /**
     * @var array controller all actions
     */
    public $permisions = [
        "index" => [
            "name" => "members_member_index",
            "description" => "members/member/index"
        ],
        "view" => [
            "name" => "members_member_view",
            "description" => "members/member/view"
        ],
        "create" => [
            "name" => "members_member_create",
            "description" => "members/member/create"
        ],
        "update" => [
            "name" => "members_member_update",
            "description" => "members/member/update"
        ],
        "delete" => [
            "name" => "members_member_delete",
            "description" => "members/member/delete"
        ],
        "editable" => [
            "name" => "members_member_editable",
            "description" => "members/member/editable"
        ],
        "editable-column-update" => [
            "name" => "members_member_editable-column-update",
            "description" => "members/member/editable-column-update"
        ],
        "create-for-rel" => [
            "name" => "members_member_create-for-rel",
            "description" => "members/member/create-for-rel"
        ]
    ];
    
    /**
     * @var array roles and maping to actions/permisions
     */
    public $roles = [
        "MembersMemberFull" => [
            "index",
            "view",
            "create",
            "update",
            "delete",
            "editable",
            "editable-column-update",
            "create-for-rel"
        ],
        "MembersMemberView" => [
            "index",
            "view"
        ],
        "MembersMemberEdit" => [
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
