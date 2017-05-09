<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Acl extends Controller_Template {


	public $template = 'template';
	public $auto_render = TRUE;
	
		public function action_index(){
				///View Header
				$this->template->header = View::factory('header')->bind('header', $header);
				$this->template->footer = View::factory('footer')->bind('footer', $footer);
				
				
				
				//// USER VIEW LOCALIZATION
				$id = Auth::instance()->get_user()->username;
			    $user = ORM::factory('User')->where('username','=', $id )->find();
				$userLoc = $user->localization;
				
				///View
				$view = View::Factory('acl');
				$acl = ORM::factory('Acl')->where('localization','=',$userLoc)->find_all();
				$view->set('acl',$acl)->set('userLoc', $userLoc);
				$this->template->corpopagina = $view;	
				
				if (!Auth::instance()->logged_in()){
					$this->redirect('index.php/Login');
				}
				
							
		}
		
			public function action_delete(){
				
			$id = $this->request->param('id');
			$objEntrada = ORM::Factory('Acl',$id);
	        
			if($objEntrada->loaded()){
				if($objEntrada->delete()){
					
					$session = Session::instance()->get('id');
					$this->redirect('index.php/acl' . $session);
				}
			}
			
				//// USER LOCALIZATION FILE FOR REGION
				$id = Auth::instance()->get_user()->username;
			    $user = ORM::factory('User')->where('username','=', $id )->find();
				$userLoc = $user->localization;
			
			//UPLOAD FILE
			$directory =  DOCROOT. 'static/files/';
		   	$ourFileName = $directory . $userLoc;
			$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
			$entradaIpa = ORM::factory('Acl')->find_all();
			$ourFileWrite = fwrite($ourFileHandle,"option { \n");	
				foreach($entradaIpa as $entradas){
					$ourFileWrite = fwrite($ourFileHandle,$entradas->ip. ";\n");	
					}
			$ourFileWrite = fwrite($ourFileHandle,"} \n");
			fclose($ourFileHandle);
		}
		
		
		public function action_edit(){
	

			
			$id = $this->request->param('id');			
			$entrada = ORM::factory('Acl',$id);
                        $this->template->header = View::factory('header')->bind('header', $header);
                        $this->template->footer = View::factory('footer')->bind('footer', $footer);
			$view = View::Factory('edit')->set('entrada',$entrada);
			$this->template->corpopagina = $view;
			
		if($this->request->method() == 'POST'){
			$entrada->values($_POST);
			$entrada->update();
		    $session = Session::instance()->get('id');		
			$this->redirect('index.php/acl' . $session);
			}
		}
		
		
		public function action_create(){
				
			$id = $this->request->param('id');
			$entrada = ORM::factory('Acl',$id);
			$this->template->header = View::factory('header')->bind('header', $header);
			$this->template->footer = View::factory('footer')->bind('footer', $footer);
			$view = View::Factory('createAcl')->set('entrada',$entrada);
			$this->template->corpopagina = $view;
			///////////////////

			
		if($this->request->method() == 'POST'){
			$id = Auth::instance()->get_user()->username;
			$user = ORM::factory('User')->where('username','=', $id )->find();
			$entrada->values($_POST);
			
			//////////// ADD RECORD TABLE LOCALIZATION ID USER  /////////
			$entrada->localization = $user->localization;
			
			$entrada->save();
		    $session = Session::instance()->get('id');
			$this->redirect('index.php/acl' . $session);
			}	
		}
		
		
		
		
		public function action_save(){
				
			$view = View::Factory('acl');
			$this->template = $view;	
				
			// USER LOCALIZATION FILE FOR COUNTRY
			$id = Auth::instance()->get_user()->username;
			//$user = ORM::factory('User')->where('username','=', $id )->find();
			//$userLoc = $user->localization;
			$userLoc = Auth::instance()->get_user()->localization;
			
			//UPLOAD FILE
			$directory =  DOCROOT. 'static/files/';
		   	$ourFileName = $directory . $userLoc.".conf";
			$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
			$entradaIpa = ORM::factory('Acl')->where('localization','=', $userLoc)->find_all();
			$ourFileWrite = fwrite($ourFileHandle,"option { \n");	
				foreach($entradaIpa as $entradas){
					$ourFileWrite = fwrite($ourFileHandle,$entradas->ip. ";\n");	
					}
			$ourFileWrite = fwrite($ourFileHandle,"} \n");
			fclose($ourFileHandle);
			
			$this->redirect('index.php/acl');
		}
}
