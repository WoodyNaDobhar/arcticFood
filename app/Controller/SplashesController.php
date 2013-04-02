<?php
App::uses('AppController', 'Controller');
/**
 * Splashes Controller
 *
 * @property Splash $Splash
 */
class SplashesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Splash->recursive = 0;
		$this->set('splashes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Splash->exists($id)) {
			throw new NotFoundException(__('Invalid splash'));
		}
		$options = array('conditions' => array('Splash.' . $this->Splash->primaryKey => $id));
		$this->set('splash', $this->Splash->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			
			$this->request->data = $this->imageProcess($this->request->data, 'Splash', 'image');
			$this->Splash->create();
			if ($this->Splash->save($this->request->data)) {
				$this->Session->setFlash(__('The splash has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The splash could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Splash->exists($id)) {
			throw new NotFoundException(__('Invalid splash'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			$this->request->data = $this->imageProcess($this->request->data, 'Splash', 'image');
			if ($this->Splash->save($this->request->data)) {
				$this->Session->setFlash(__('The splash has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The splash could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Splash.' . $this->Splash->primaryKey => $id));
			$this->request->data = $this->Splash->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Splash->id = $id;
		if (!$this->Splash->exists()) {
			throw new NotFoundException(__('Invalid splash'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Splash->delete()) {
			$this->Session->setFlash(__('Splash deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Splash was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
