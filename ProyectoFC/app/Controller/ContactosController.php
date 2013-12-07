<?php
App::import('Model', 'Provincia');
App::import('Model', 'Comitente');
App::import('Model', 'Ciudad');

class ContactosController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('contactos', $this->Contacto->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Contacto no encontrado'));
		}
		$contacto = $this->Contacto->findById($id);
		if (!$contacto) {
			throw new NotFoundException(__('Contacto no encontrado'));
		}
			$this->set('contacto', $contacto);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Contacto->create();
			if ($this->Contacto->save($this->request->data)) {
				$this->Session->setFlash('El Contacto se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Contacto no pudo ser grabado');
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

//Combo de Ciudad
			$ciudad = new Ciudad();
			$ciudads = $ciudad->find('list', array(
					'fields' => array('Ciudad.id', 'Ciudad.nombre')
			));
			$this->set('ciudads', $ciudads);


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
			throw new NotFoundException(__('Contacto no encontrado'));
		}
	
		$contacto = $this->Contacto->findById($id);
		if (!$contacto) {
			throw new NotFoundException(__('Contacto no encontrado'));
		}
	
		if ($this->request->is('contacto') || $this->request->is('put')) {
			$this->Contacto->id = $id;
			if ($this->Contacto->save($this->request->data)) {
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

//Combo de Ciudad
			$ciudad = new Ciudad();
			$ciudads = $ciudad->find('list', array(
					'fields' => array('Ciudad.id', 'Ciudad.nombre')
			));
			$this->set('ciudads', $ciudads);


//Combo de Comitente
			$comitente = new Comitente();
			$comitentes = $comitente->find('list', array(
					'fields' => array('Comitente.id', 'Comitente.nombre')
			));
			$this->set('comitentes', $comitentes);
}
	
		if (!$this->request->data) {
			$this->request->data = $contacto;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Contacto->delete($id)) {
			$this->Session->setFlash('El Contacto con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
