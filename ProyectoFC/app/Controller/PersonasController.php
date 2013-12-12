<?php
App::import('Model', 'Provincia');
App::import('Model', 'Ciudad');

class PersonasController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('personas', $this->Persona->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Persona no encontrado'));
		}
		$persona = $this->Persona->findById($id);
		if (!$persona) {
			throw new NotFoundException(__('Persona no encontrado'));
		}
			$this->set('persona', $persona);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash('La Persona se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La Persona no pudo ser grabado');
			}
		}
		else
		{
				
			//Combo de Provincia
			$provincia = new Provincia();
			$provincias = $provincia->find('list', array(
					'fields' => array('Provincia.id', 'Provincia.nombre')
			));
			$this->set('provincias', $provincias);
		
			//Combo de Ciudad
			$ciudad = new Ciudad();
			$ciudads = $ciudad->find('list', array(
					'fields' => array('Ciudad.id', 'Ciudad.nombre')
			));
			$this->set('ciudads', $ciudads);
		
		
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Persona no encontrado'));
		}
	
		$persona = $this->Persona->findById($id);
		if (!$persona) {
			throw new NotFoundException(__('Persona no encontrado'));
		}
	
		if ($this->request->is('persona') || $this->request->is('put')) {
			$this->Persona->id = $id;
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
		else
		{
			
			//Combo de Provincia
			$provincia = new Provincia();
			$provincias = $provincia->find('list', array(
					'fields' => array('Provincia.id', 'Provincia.nombre')
			));
			$this->set('provincias', $provincias);
		
			//Combo de Ciudad
			$ciudad = new Ciudad();
			$ciudads = $ciudad->find('list', array(
					'fields' => array('Ciudad.id', 'Ciudad.nombre')
			));
			$this->set('ciudads', $ciudads);
		
		
		}
		
		
	
		if (!$this->request->data) {
			$this->request->data = $persona;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Persona->delete($id)) {
			$this->Session->setFlash('La Persona con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>