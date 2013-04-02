<?php
App::uses('AppController', 'Controller');
/**
 * Charities Controller
 *
 * @property Charity $Charity
 */
class CharitiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Charity->recursive = 0;
		$this->set('charities', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Charity->exists($id)) {
			throw new NotFoundException(__('Invalid charity'));
		}
		$options = array('conditions' => array('Charity.' . $this->Charity->primaryKey => $id));
		$this->set('charity', $this->Charity->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			
			$this->request->data = $this->imageProcess($this->request->data, 'Charity', 'logo');
			$this->Charity->create();
			if ($this->Charity->save($this->request->data)) {
				$this->Session->setFlash(__('The charity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The charity could not be saved. Please, try again.'));
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
		if (!$this->Charity->exists($id)) {
			throw new NotFoundException(__('Invalid charity'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			$this->request->data = $this->imageProcess($this->request->data, 'Charity', 'logo');
			if ($this->Charity->save($this->request->data)) {
				$this->Session->setFlash(__('The charity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The charity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Charity.' . $this->Charity->primaryKey => $id));
			$this->request->data = $this->Charity->find('first', $options);
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
		$this->Charity->id = $id;
		if (!$this->Charity->exists()) {
			throw new NotFoundException(__('Invalid charity'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Charity->delete()) {
			$this->Session->setFlash(__('Charity deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Charity was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
