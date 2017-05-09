<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Create extends Controller_Template {
	
	public $template = 'template';
	public $auto_render = TRUE;
	
		public function action_index(){
				///View Header
				$this->template->header = View::factory('header')->bind('header', $header);
				$this->template->footer = View::factory('footer')->bind('footer', $footer);
				
				//List User
				$user = ORM::factory('User')->find_all();
				///View
				$view = View::Factory('user')->bind('create', $create)->bind('messages',$messages)->set('user',$user)->bind('errors',$errors);
				$this->template->corpopagina = $view;
				
				if (!Auth::instance()->logged_in()){
					$this->redirect('index.php/Login');
				}	
	}
	
	
		public function action_create(){
			

			$this->template->header = View::factory('header')->bind('header', $header);
			$this->template->footer = View::factory('footer')->bind('footer', $footer);
			$view = View::Factory('createUser');
			
			
			$messages = "";
			
			if (HTTP_Request::POST == $this->request->method()){
				
				$objUserExists = ORM::factory('User')->where('username', '=', $this->request->post('username') )->find();
				
				if( $objUserExists->loaded() ){
					$messages = "<br><b>Usuario j? esta cadastrado!!!!</b>";
					//$this->redirect("/index.php/Create/create");
				}else{
				//echo "<br><pre>";
				//print_r($objUserExists);
			
				//exit;
				
					$user = ORM::factory('User');
					$user->username = $_POST['username'];
					$user->email = $_POST['email'];
					$user->password = $_POST['password'];
					$user->localization = $_POST['localization'];
					$user->save();
					$user->add('roles', ORM::factory('Role', array('name' => 'login')));
					$view->messages = 'Criado';
					$this->redirect("/index.php/Create");

				}
			}

			$view->set('messages', $messages);
			$this->template->corpopagina = $view;
			
			

	}
	
		public function action_delete(){
				
			$id = $this->request->param('id');
			$objUser = ORM::Factory('User',$id);
			$this->template->header = View::factory('header')->bind('header', $header);
            $this->template->footer = View::factory('footer')->bind('footer', $footer);
			if($objUser->loaded()){
				if($objUser->delete()){
					$session = Session::instance()->get('id');
					$this->redirect('index.php/create' . $session);
				}
			}
		}
		
		public function action_edit(){

			$id = $this->request->param('id');			
			$entrada = ORM::factory('User',$id);
                        $this->template->header = View::factory('header')->bind('header', $header);
                        $this->template->footer = View::factory('footer')->bind('footer', $footer);
			$view = View::Factory('editUser')->set('entrada',$entrada);
			$this->template->corpopagina = $view;
			
		if($this->request->method() == 'POST'){
			$entrada->values($_POST);
			$entrada->update();
		    $session = Session::instance()->get('id');		
			$this->redirect('index.php/create' . $session);
			}
		}

}