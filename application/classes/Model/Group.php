<?php

class Model_Group extends ORM
{

    /**
     * This describes the rules for our ORM Model.
     * For example, we can not add groups whose
     * name is empty.
     */
    public function rules()
    {
        return [
            'name' => [
                ['not_empty'],
                ['alpha_dash']
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