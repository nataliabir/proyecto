<?php
App::import('Model', 'Provincia');
App::import('Model', 'CategoriaIva');
App::import('Model', 'TipoComitente');
App::import('Model', 'Ciudad');
class ComitentesController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('comitentes', $this->Comitente->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Comitente no encontrado'));
		}
		$comitente = $this->Comitente->findById($id);
		if (!$comitente) {
			throw new NotFoundException(__('Comitente no encontrado'));
		}
			$this->set('comitente', $comitente);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Comitente->create();
			if ($this->Comitente->save($this->request->data)) {
				$this->Session->setFlash('El Comitente se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Comitente no pudo ser grabado');
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
			
			//Combo de Categoria de IVA
			$categoriaiva = new CategoriaIva();
			$categoriaivas = $categoriaiva->find('list', array(
					'fields' => array('CategoriaIva.id', 'CategoriaIva.descripcion')
			));
			$this->set('categoriaivas', $categoriaivas);
				
			//Combo de Tipo Comitente
			$tipocomitente = new TipoComitente();
			$tipocomitentes = $tipocomitente->find('list', array(
					'fields' => array('TipoComitente.id', 'TipoComitente.nombre')
			));
			$this->set('tipocomitentes', $tipocomitentes);
			
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
			throw new NotFoundException(__('Comitente no encontrado'));
		}
	
		$comitente = $this->Comitente->findById($id);
		if (!$comitente) {
			throw new NotFoundException(__('Comitente no encontrado'));
		}
	
		if ($this->request->is('comitente') || $this->request->is('put')) {
			$this->Comitente->id = $id;
			if ($this->Comitente->save($this->request->data)) {
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
				
			//Combo de Categoria de IVA
			$categoriaiva = new CategoriaIva();
			$categoriaivas = $categoriaiva->find('list', array(
					'fields' => array('CategoriaIva.id', 'CategoriaIva.descripcion')
			));
			$this->set('categoriaivas', $categoriaivas);
		
			//Combo de Tipo Comitente
			$tipocomitente = new TipoComitente();
			$tipocomitentes = $tipocomitente->find('list', array(
					'fields' => array('TipoComitente.id', 'TipoComitente.nombre')
			));
			$this->set('tipocomitentes', $tipocomitentes);
				
			//Combo de Ciudad
			$ciudad = new Ciudad();
			$ciudads = $ciudad->find('list', array(
					'fields' => array('Ciudad.id', 'Ciudad.nombre')
			));
			$this->set('ciudads', $ciudads);
		
		}
	
		if (!$this->request->data) {
			$this->request->data = $comitente;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Comitente->delete($id)) {
			$this->Session->setFlash('El Comitente con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>