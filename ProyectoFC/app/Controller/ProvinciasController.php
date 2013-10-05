<?php
class ProvinciasController extends AppController{
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('provincias', $this->Provincia->find('all'));
	}
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid provincia'));
		}
		$provincia = $this->Provincia->findById($id);
		if (!$provincia) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->set('provincia', $provincia);
	}
}