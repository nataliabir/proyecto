<?php
App::import('Model', 'Provincia');

class CiudadsController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('ciudads', $this->Ciudad->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Ciudad no encontrado'));
		}
		$ciudad = $this->Ciudad->findById($id);
		if (!$ciudad) {
			throw new NotFoundException(__('Ciudad no encontrado'));
		}
			$this->set('ciudad', $ciudad);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Ciudad->create();
			if ($this->Ciudad->save($this->request->data)) {
				$this->Session->setFlash('La Ciudad se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La Ciudad no pudo ser grabado');
			}
		}
else
		{
			//Combo de Provincias
			$provincia = new Provincia();
			$provincias = $provincia->find('list', array(
					'fields' => array('Provincia.id', 'Provincia.nombre')
			));
			$this->set('provincias', $provincias);

	}
}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Ciudad no encontrado'));
		}
	
		$ciudad = $this->Ciudad->findById($id);
		if (!$ciudad) {
			throw new NotFoundException(__('Ciudad no encontrado'));
		}
	
		if ($this->request->is('ciudad') || $this->request->is('put')) {
			$this->Ciudad->id = $id;
			if ($this->Ciudad->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
else
		{
			//Combo de Provincias
			$provincia = new Provincia();
			$provincias = $provincia->find('list', array(
					'fields' => array('Provincia.id', 'Provincia.nombre')
			));
			$this->set('provincias', $provincias);
}
	
		if (!$this->request->data) {
			$this->request->data = $ciudad;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Ciudad->delete($id)) {
			$this->Session->setFlash('La ciudad con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
