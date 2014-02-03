<?php
App::uses('AppController', 'Controller');
/**
 * Mylists Controller
 *
 * @property Mylist $Mylist
 * @property PaginatorComponent $Paginator
 */
class MylistsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	//public $components = array('Paginator');
	public $components = array('Paginator','RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mylist->recursive = 0;
		$mylists = $this->Mylist->find('all');
		$this->set('mylists', $this->Paginator->paginate());
		$this->set('_serialize', array('mylists'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mylist->exists($id)) {
			$this->set('m','invalidMyListId');
		} else {
			$options = array('conditions' => array('Mylist.' . $this->Mylist->primaryKey => $id));
			$this->set('mylist', $this->Mylist->find('first', $options));
		}
		$this->set('_serialize', array('mylist','m'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->Mylist->create();
		if ($this->Mylist->save($this->request->data)) {
			$this->set('m','succeeded');
		} else {
			$errors = $this->Mylist->validationErrors['name'];
			if(in_array("isUnique",$errors)) {
				$this->set('m',"overlapMyListName");
			} else if(in_array("notEmpty",$errors)) {
				$this->set('m',"invalidMyListName");
			}
		}
		$this->set('_serialize',array('m'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mylist->exists($id)) {
			$this->set('m','invalidMyListId');
		} else if ($this->Mylist->save($this->request->data)) {
			$this->set('m','succeeded');
		} else {
			$errors = $this->Mylist->validationErrors['name'];
			if(in_array("isUnique",$errors)) {
				$this->set('m',"overlapMyListName");
			} else if(in_array("notEmpty",$errors)) {
				$this->set('m',"invalidMyListName");
			}
		}
		$this->set('_serialize',array('m'));
	}



/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Mylist->id = $id;
		if (!$this->Mylist->exists()) {
			$this->set('m','invalidMyListId');
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mylist->delete()) {
			$this->set('m','succeeded');
		}
		$this->set('_serialize',array('m'));
	}
}

