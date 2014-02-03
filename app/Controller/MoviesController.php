<?php
App::uses('AppController', 'Controller');
/**
 * Movies Controller
 *
 * @property Movie $Movie
 * @property PaginatorComponent $Paginator
 */
class MoviesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler');

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->Movie->create();
		if ($this->Movie->save($this->request->data)) {
			$this->set('m','succeeded');
		} else {
			$errors = $this->Movie->validationErrors['smid'];
			if(in_array("unique",$errors)) {
				$this->set('m',"overlapSmId");
			}
		}
		$mylists = $this->Movie->Mylist->find('list');
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
		//$this->Mylist->id = $this->request->data['mylist_id'];
		//if (!$this->Mylist->exists()) {
		//	$this->set('m',"invalidMyListId");
		//} else {
		$cond = array(
			'conditions' => array(
				'Movie.smid' => $this->request->data['smid'],
				'Movie.mylist_id' => $this->request->data['mylist_id'],
				),
			);
			//$this->Movie->find('first',$cond);
		$this->request->onlyAllow('post', 'delete');
		$this->set('m',$this->Movie->find('first',$cond));
		$t = $this->Movie->find('first',$cond);
		//*
		if ($this->Movie->delete($t['Movie'],false)) {
			$this->set('m','succeeded');
			//$this->Session->setFlash(__('The movie has been deleted.'));
		} else {
			$this->set('m','failed');
			//$this->Session->setFlash(__('The movie could not be deleted. Please, try again.'));
		}
		//}
		//*/
		$this->set('_serialize',array('m'));
//		return $this->redirect(array('action' => 'index'));
	}
}
