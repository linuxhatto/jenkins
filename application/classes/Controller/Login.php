<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Template {


	public $template = 'login';
	public $auto_render = TRUE;
	
		public function action_index(){
				///View Header
				$errors = "";
				$this->content = View::Factory('login')->bind('errors', $errors);
					
				
			if (HTTP_Request::POST == $this->request->method()) {

					// Handled from a form with inputs with names email / password
					$post = $this->request->post();
					$success = Auth::instance()->login($post['username'], $post['password']);

					if ($success){
						$this->redirect('index.php/Home');
						// Login successful, send to app
						}
					else
						{
						// Login failed, send back to form with error message
						$errors = 'Por favor entre com Login primeiro';
						}
				
			}

				
	}
	
	
}
