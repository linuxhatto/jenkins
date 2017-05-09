<?php defined('SYSPATH') OR die('No direct access allowed.');

// in models/role.php
class Model_Role extends ORM {
//     protected $has_and_belongs_to_many = array('users');

        public function unique_key($id = NULL)
        {
                if ( ! empty($id) AND is_string($id) AND ! ctype_digit($id) )
                {
                        return 'name';
                }

                return parent::unique_key($id);
        }
		
		protected $_has_many = array('users' => array('model' => 'user', 'through' => 'user_role'));

		
	
}