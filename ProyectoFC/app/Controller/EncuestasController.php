<?php
App::import('Model', 'Proyecto');
class EncuestasController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('encuestas', $this->Encuesta->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$encuesta = $this->Encuesta->findById($id);
		if (!$encuesta) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
			$this->set('encuesta', $encuesta);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Encuesta->create();
			if ($this->Encuesta->save($this->request->data)) {
				$this->Session->setFlash('Los datos se grabaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no se pudieron grabar');
			}
		}
else
		{
			//Combo de Proyecto
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
	
		$encuesta = $this->Encuesta->findById($id);
		if (!$encuesta) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		if ($this->request->is('encuesta') || $this->request->is('put')) {
			$this->Encuesta->id = $id;
			if ($this->Encuesta->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	else
		{
			//Combo de Proyecto
			$proyecto = new Proyecto();
			$proyectos = $proyecto->find('list', array(
					'fields' => array('Proyecto.id', 'Proyecto.nombre')
			));
			$this->set('proyectos', $proyectos);
		}
		if (!$this->request->data) {
			$this->request->data = $encuesta;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Encuesta->delete($id)) {
			$this->Session->setFlash('La encuesta con ID: ' . $id . ' fue borrada');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
