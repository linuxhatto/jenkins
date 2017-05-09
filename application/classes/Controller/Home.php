<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template {

	public $template = 'template';
	public $auto_render = TRUE;
	
	
	public function action_index(){
		$user =  Auth::instance()->get_user()->username;	
		$this->template->header = View::factory('header')->bind('header', $header)->set('user',$user);
         	$this->template->footer = View::factory('footer')->bind('footer', $footer);
     		$view = View::Factory('index');
			$this->template->corpopagina = $view;	
			
			if (!Auth::instance()->logged_in()){
					$this->redirect('index.php/Login');
				}
	}
	
	public function action_logout(){
			
				if (Auth::instance()->logged_in()){
						Auth::instance()->logout();
						session_destroy();
						$this->redirect('index.php/Login');
				}
	}
		
} // End Welcome
