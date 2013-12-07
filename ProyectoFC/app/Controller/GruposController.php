<?php
App::import('Model', 'Departamento');

class GruposController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('grupos', $this->Grupo->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
		$grupo = $this->Grupo->findById($id);
		if (!$grupo) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
			$this->set('grupo', $grupo);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Grupo->create();
			if ($this->Grupo->save($this->request->data)) {
				$this->Session->setFlash('Los datos se grabaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no se pudieron grabar');
			}
		}

	else
	{	
	
	//Combo de Departamento
	$departamento = new Departamento();
	$departamentos = $departamento->find('list', array(
			'fields' => array('Departamento.id', 'Departamento.nombre')
	));
	$this->set('departamentos', $departamentos);

	}
	}
	
	
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		$grupo = $this->Grupo->findById($id);
		if (!$grupo) {
			throw new NotFoundException(__('Dato no encontrado'));
		}
	
		if ($this->request->is('grupo') || $this->request->is('put')) {
			$this->Grupo->id = $id;
			if ($this->Grupo->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
else
	{	
	
	//Combo de Departamento
	$departamento = new Departamento();
	$departamentos = $departamento->find('list', array(
			'fields' => array('Departamento.id', 'Departamento.nombre')
	));
	$this->set('departamentos', $departamentos);

	}
	
		
		if (!$this->request->data) {
			$this->request->data = $grupo;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Grupo->delete($id)) {
			$this->Session->setFlash('El Grupo con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
