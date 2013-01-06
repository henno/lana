<?php

class Model_Group extends ORM
{

    protected $_has_many = [
        'members' => ['through' => 'groups_users',
            'model' => 'User',
        'far_key'=>'user_id'
        ]
    ];

    /**
     * This describes the rules for our ORM Model.
     * For example, we can not add groups whose
     * name is empty.
     */
    public function rules()
    {
        return [
            'name' => [
                ['not_empty']
            ]
        ];
    }

    // This saves data to the database
    public function save_group(array $group_data)
    {

        // Load values that go into the DB
        $this->values($group_data, ['name']);
        // ...or you could do: array('name')

        // Execute MySQL INSERT with loaded values
        $this->save();
    }
}