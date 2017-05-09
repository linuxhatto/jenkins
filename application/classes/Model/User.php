<?php defined('SYSPATH') or die('No direct access allowed.');
class Model_User extends Model_Auth_User {
      protected $sorting = array('username' => 'asc');
      protected $_table_name  = 'users'; // default: accounts
      protected $_primary_key = 'id';      // default: id
	
	protected $_has_many = array(
    'user_tokens' => array('model' => 'user_token'),
    'roles'       => array('model' => 'role', 'through' => 'roles_users'),
);
}
?>

