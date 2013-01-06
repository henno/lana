<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Groups extends Controller_Main {

	public function action_index()
	{
        $this->content->groups = $this->_orm->find_all();
	}

}