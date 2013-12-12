<?php
App::import('Model', 'Proyecto');
class PlansController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('plans', $this->Plan->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Plan no encontrdo'));
		}
		$plan = $this->Plan->findById($id);
		if (!$plan) {
			throw new NotFoundException(__('Plan no encontrado'));
		}
			$this->set('plan', $plan);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Plan->create();
			if ($this->Plan->save($this->request->data)) {
				$this->Session->setFlash('El Plan se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Plan no pudo ser grabado');
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
		
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Plan no encontrado'));
		}
	
		$plan = $this->Plan->findById($id);
		if (!$plan) {
			throw new NotFoundException(__('Plan no encontrado'));
		}
	
		if ($this->request->is('plan') || $this->request->is('put')) {
			$this->Plan->id = $id;
			if ($this->Plan->save($this->request->data)) {
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
			$this->request->data = $plan;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Plan->delete($id)) {
			$this->Session->setFlash('El Plan con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
