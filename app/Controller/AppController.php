<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright	 Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link		  http://cakephp.org CakePHP(tm) Project
 * @package	   app.Controller
 * @since		 CakePHP(tm) v 0.2.9
 * @license	   MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package	   app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $helpers = array('BootstrapCake.Bootstrap');

	public $components = array(
		'Session',
		'Auth',
		'Cookie'
	);

	public function isAuthorized($user){
		
		// Admin can access every action
		if(isset($user['type']) && $user['type'] === 'admin'){
			$this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'index');
			return true;
		}
		
		// Default deny
		return false;
	}
	
	//process a photo on add/edit
	function imageProcess($data, $controller, $field){
			
		if(is_array($data[$controller][$field]) && $data[$controller][$field]['name'] != ''){
			
			//check the file type
			if(	$data[$controller][$field]['type'] != 'image/jpeg' &&
				$data[$controller][$field]['type'] != 'image/gif' &&
				$data[$controller][$field]['type'] != 'image/png'
			){
				if(!$this->request->is('Ajax')){
					$this->Session->setFlash(__('The file was invalid: wrong file type.'));
				}else{
					$return = false;
				}
			}
			
			//check the file size
			if($data[$controller][$field]['size'] > 5000000){
				if(!$this->request->is('Ajax')){
					$this->Session->setFlash(__('The file was invalid: file size too large.'));
				}else{
					$return = false;
				}
			}
			
			//check for error
			if($data[$controller][$field]['error'] != 0){
				if(!$this->request->is('Ajax')){
					$this->Session->setFlash(__('The file was invalid: file error.'));
				}else{
					$return = false;
				}
			}
			
			//must be good...load it
			$fileNameArray = explode(".", $data[$controller][$field]['name']);
			$fileName = $controller.$fileNameArray[0].'.'.$fileNameArray[1];
			$uploadfile = UPLOAD_IMAGE . basename($fileName);
			if(!move_uploaded_file($data[$controller][$field]['tmp_name'], $uploadfile)){
				if(!$this->request->is('Ajax')){
					$this->Session->setFlash(__('The file failed to transfer.  Please try again.'));
				}else{
					debug('failed to move');
					$return = false;
				}
			}
			
			//update the array to something saveable
			$data[$controller][$field] = $fileName;
		}else{
			unset($data[$controller][$field]);
		}
		
		return $data;
	}
}
