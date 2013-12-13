<?php

class RetencionsController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('retencions', $this->Retencion->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Retenciones no encontrado'));
		}
		$retencion = $this->Retencion->findById($id);
		if (!$retencion) {
			throw new NotFoundException(__('retencion no encontrado'));
		}
			$this->set('retencion', $retencion);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Retencion->create();
			if ($this->Retencion->save($this->request->data)) {
				$this->Session->setFlash('El Retencion se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Retencion no pudo ser grabado');
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
			throw new NotFoundException(__('Retencion no encontrado'));
		}
	
		$retencion = $this->Retencion->findById($id);
		if (!$retencion) {
			throw new NotFoundException(__('Retencion no encontrado'));
		}
	
		if ($this->request->is('retencion') || $this->request->is('put')) {
			$this->Retencion->id = $id;
			if ($this->Retencion->save($this->request->data)) {
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
			$this->request->data = $retencion;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Retencion->delete($id)) {
			$this->Session->setFlash('El Retencion con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
