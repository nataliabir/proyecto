<?php
App::import('Model', 'Proyecto');

class InformeAvancesController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('informeavances', $this->InformeAvance->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$informeavance = $this->InformeAvance->findById($id);
		if (!$informeavance) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
			$this->set('informeavance', $informeavance);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->InformeAvance->create();
			if ($this->InformeAvance->save($this->request->data)) {
				$this->Session->setFlash('Los datos se grabaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no se pudieron grabar');
			}
		}
else
	{	
	//Combo de Proyectos
	$proyecto = new Proyecto();
	$proyectos = $proyecto->find('list', array(
			'fields' => array('Proyecto.id', 'Proyecto.nombre')
	));
	$this->set('proyectos', $proyectos);

	}}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		$informeavance = $this->InformeAvance->findById($id);
		if (!$informeavance) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		if ($this->request->is('informeavance') || $this->request->is('put')) {
			$this->InformeAvance->id = $id;
			if ($this->InformeAvance->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
else
	{	
	//Combo de Proyectos
	$proyecto = new Proyecto();
	$proyectos = $proyecto->find('list', array(
			'fields' => array('Proyecto.id', 'Proyecto.nombre')
	));
	$this->set('proyectos', $proyectos);
	}
	
		if (!$this->request->data) {
			$this->request->data = $informeavance;
		}
	
	}
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->InformeAvance->delete($id)) {
			$this->Session->setFlash('El Informe de Avance con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
