<?php
App::import('Model', 'Categoria');
App::import('Model', 'Departamento');
App::import('Model', 'Contacto');
App::import('Model', 'Director');
App::import('Model', 'Clasificacion');
App::import('Model', 'Referente');
App::import('Model', 'Estado');

class ProyectosController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('proyectos', $this->Proyecto->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Proyecto no encontrado'));
		}
		$proyecto = $this->Proyecto->findById($id);
		if (!$proyecto) {
			throw new NotFoundException(__('Proyecto no encontrado'));
		}
			$this->set('proyecto', $proyecto);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Proyecto->create();
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash('El Proyecto se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Proyecto no pudo ser grabado');
			}
		}
	else
		{
				
			//Combo de Categoria
			$categoria = new Categoria();
			$categorias = $categoria->find('list', array(
					'fields' => array('Categoria.id', 'Categoria.nombre')
			));
			$this->set('categorias', $categorias);
			//Combo de Departamento
			$departamento = new Departamento();
			$departamentos = $departamento->find('list', array(
					'fields' => array('Departamento.id', 'Departamento.nombre')
			));
			$this->set('departamentos', $departamentos);
			//Combo de Contacto
			$contacto = new Contacto();
			$contactos = $contacto->find('list', array(
					'fields' => array('Contacto.id', 'Contacto.nombre')
			));
			$this->set('contactos', $contactos);
			//Combo de Director
			$director = new Director();
			$directors = $director->find('list', array(
					'fields' => array('Director.id', 'Director.descripcion')
			));
			$this->set('directors', $directors);
			//Combo de Clasificacion
			$clasificacion = new Clasificacion();
			$clasificacions = $clasificacion->find('list', array(
					'fields' => array('Clasificacion.id', 'Clasificacion.nombre')
			));
			$this->set('clasificacions', $clasificacions);
			$this->set('directors', $directors);
			//Combo de Referente
			$referente = new Referente();
			$referentes = $referente->find('list', array(
					'fields' => array('Referente.id', 'Referente.nombre')
			));
			$this->set('referentes', $referentes);
			//Combo de Estado
			$estado = new Estado();
			$estados = $estado->find('list', array(
					'fields' => array('Estado.id', 'Estado.nombre')
			));
			$this->set('estados', $estados);
		
	}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Proyecto no encontrado'));
		}
	
		$proyecto = $this->Proyecto->findById($id);
		if (!$proyecto) {
			throw new NotFoundException(__('Proyecto no encontrado'));
		}
	
		if ($this->request->is('proyecto') || $this->request->is('put')) {
			$this->Proyecto->id = $id;
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
		else
		{
		
			//Combo de Categoria
			$categoria = new Categoria();
			$categorias = $categoria->find('list', array(
					'fields' => array('Categoria.id', 'Categoria.nombre')
			));
			$this->set('categorias', $categorias);
			//Combo de Departamento
			$departamento = new Departamento();
			$departamentos = $departamento->find('list', array(
					'fields' => array('Departamento.id', 'Departamento.nombre')
			));
			$this->set('departamentos', $departamentos);
			//Combo de Contacto
			$contacto = new Contacto();
			$contactos = $contacto->find('list', array(
					'fields' => array('Contacto.id', 'Contacto.nombre')
			));
			$this->set('contactos', $contactos);
			//Combo de Director
			$director = new Director();
			$directors = $director->find('list', array(
					'fields' => array('Director.id', 'Director.descripcion')
			));
			$this->set('directors', $directors);
			//Combo de Clasificacion
			$clasificacion = new Clasificacion();
			$clasificacions = $clasificacion->find('list', array(
					'fields' => array('Clasificacion.id', 'Clasificacion.nombre')
			));
			$this->set('clasificacions', $clasificacions);
			$this->set('directors', $directors);
			//Combo de Referente
			$referente = new Referente();
			$referentes = $referente->find('list', array(
					'fields' => array('Referente.id', 'Referente.nombre')
			));
			$this->set('referentes', $referentes);
			//Combo de Estado
			$estado = new Estado();
			$estados = $estado->find('list', array(
					'fields' => array('Estado.id', 'Estado.nombre')
			));
			$this->set('estados', $estados);
		
		}
		
			
		if (!$this->request->data) {
			$this->request->data = $proyecto;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Proyecto->delete($id)) {
			$this->Session->setFlash('El proyecto con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
