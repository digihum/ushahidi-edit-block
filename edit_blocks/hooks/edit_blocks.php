<?php defined('SYSPATH') or die('No direct script access.');
// Start wildlife category block
class edit_blocks { // CHANGE THIS FOR OTHER BLOCKS
	public function __construct()
	{
		// Array of block params
		$block = array(
			"classname" => "edit_blocks", // Must match class name aboce
			"name" => "Edit Blocks",
			"description" => "A proper edit block"
		);
		// register block with core, this makes it available to users 
		blocks::register($block);
	}
	public function block($user_id, $report_id)
	{
		/*
		// Load the reports block view
		$content = new View('edit_blocks'); // CHANGE THIS IF YOU WANT A DIFFERENT VIEW
		
		$content->incident_id = $report_id; 
		
		$content->incidents = ORM::factory('incident')
			->where('id', $report_id)
			->where('user_id', $user_id)
			->find_all();
		
		$counter = false;
		
		foreach($content->incidents as $incident){
			$counter = true;
		}
		
		if($counter == false){
			$content->roles = ORM::factory('User')
			->join('roles_users', 'roles_users.user_id', 'users.id')
			->where('id', $user_id)
			->where('role_id', 3)
			->find_all();
		
			foreach($content->roles as $role){
				$counter = true;
			}
		}
		
		if($counter){
			echo $content;
		}
		*/
	}
}
new edit_blocks;