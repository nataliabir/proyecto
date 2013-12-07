<?php
App::import('Model', 'Plan');


class EtapasController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('etapas', $this->Etapa->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$etapa = $this->Etapa->findById($id);
		if (!$etapa) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
			$this->set('etapa', $etapa);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Etapa->create();
			if ($this->Etapa->save($this->request->data)) {
				$this->Session->setFlash('Los datos se grabaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no se pudieron grabar');
			}
		}
else
		{
			//Combo de Plan
			$plan = new Plan();
			$plans = $plan->find('list', array(
					'fields' => array('Plan.id', 'Plan.fecha_ini_prob')
			));
			$this->set('plans', $plans);


	}}

	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		$etapa = $this->Etapa->findById($id);
		if (!$etapa) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		if ($this->request->is('etapa') || $this->request->is('put')) {
			$this->Etapa->id = $id;
			if ($this->Etapa->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
else
		{
			//Combo de Plan
			$plan = new Plan();
			$plans = $plan->find('list', array(
					'fields' => array('Plan.id', 'Plan.fecha_ini_prob')
			));
			$this->set('plans', $plans);


		}
		if (!$this->request->data) {
			$this->request->data = $etapa;
		
	}
	}
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Etapa->delete($id)) {
			$this->Session->setFlash('La Etapa con ID: ' . $id . ' fue borrada');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
