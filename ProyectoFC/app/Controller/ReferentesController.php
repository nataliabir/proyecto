<?php
App::import('Model','Comitente');
class ReferentesController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('referentes', $this->Referente->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Referente no encontrado'));
		}
		$referente = $this->Referente->findById($id);
		if (!$referente) {
			throw new NotFoundException(__('referente no encontrado'));
		}
			$this->set('referente', $referente);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Referente->create();
			if ($this->Referente->save($this->request->data)) {
				$this->Session->setFlash('El Referente se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Referente no pudo ser grabado');
			}
		}
		else
		{
		
			//Combo de Comitente
			$comitente = new Comitente();
				$comitentes = $comitente->find('list', array(
			'fields' => array('Comitente.id', 'Comitente.nombre')
				));
				$this->set('comitentes', $comitentes);
	
	}
	}
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Referente no encontrado'));
		}
	
		$referente = $this->Referente->findById($id);
		if (!$referente) {
			throw new NotFoundException(__('Referente no encontrado'));
		}
	
		if ($this->request->is('referente') || $this->request->is('put')) {
			$this->Referente->id = $id;
			if ($this->Referente->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
		else
		{
		
			//Combo de Comitente
			$comitente = new Comitente();
				$comitentes = $comitente->find('list', array(
			'fields' => array('Comitente.id', 'Comitente.nombre')
				));
				$this->set('comitentes', $comitentes);
	
			
		}
		if (!$this->request->data) {
			$this->request->data = $referente;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Referente->delete($id)) {
			$this->Session->setFlash('El Referente con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
