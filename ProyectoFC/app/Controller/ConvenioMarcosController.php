<?php
App::import('Model', 'Comitente');
App::import('Model', 'EntidadFirmante');

class ConvenioMarcosController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('conveniomarcos', $this->ConvenioMarco->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Convenio Marco no encontrado'));
		}
		$conveniomarco = $this->ConvenioMarco->findById($id);
		if (!$conveniomarco) {
			throw new NotFoundException(__('Convenio Marco no encontrado'));
		}
			$this->set('conveniomarco', $conveniomarco);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->ConvenioMarco->create();
			if ($this->ConvenioMarco->save($this->request->data)) {
				$this->Session->setFlash('El Convenio Marco se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Convenio Marco no pudo ser grabado');
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
			
			//Combo de Entidad Firmnate
			$entidadfirmante = new EntidadFirmante();
			$entidadfirmantes = $entidadfirmante->find('list', array(
					'fields' => array('EntidadFirmante.id', 'EntidadFirmante.nombre')
			));
			$this->set('entidadfirmantes', $entidadfirmantes);

	}}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Convenio Marco no encontrado'));
		}
	
		$conveniomarco = $this->ConvenioMarco->findById($id);
		if (!$conveniomarco) {
			throw new NotFoundException(__('Convenio Marco no encontrado'));
		}
	
		if ($this->request->is('conveniomarco') || $this->request->is('put')) {
			$this->ConvenioMarco->id = $id;
			if ($this->ConvenioMarco->save($this->request->data)) {
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
			//Combo de Entidad Firmnate
			$entidadfirmante = new EntidadFirmante();
			$entidadfirmantes = $entidadfirmante->find('list', array(
					'fields' => array('EntidadFirmante.id', 'EntidadFirmante.nombre')
			));
			$this->set('entidadfirmantes', $entidadfirmantes);	

}


		if (!$this->request->data) {
			$this->request->data = $conveniomarco;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->ConvenioMarco->delete($id)) {
			$this->Session->setFlash('El Estado con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
