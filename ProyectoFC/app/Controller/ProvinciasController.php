<?php
class ProvinciasController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('provincias', $this->Provincia->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Provincia no encontrado'));
		}
		$provincia = $this->Provincia->findById($id);
		if (!$provincia) {
			throw new NotFoundException(__('Provincia no encontrado'));
		}
			$this->set('provincia', $provincia);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Provincia->create();
			if ($this->Provincia->save($this->request->data)) {
				$this->Session->setFlash('la Provincia se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La Provincia no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Provincia no encontrado'));
		}
	
		$provincia = $this->Provincia->findById($id);
		if (!$provincia) {
			throw new NotFoundException(__('Provincia no encontrado'));
		}
	
		if ($this->request->is('provincia') || $this->request->is('put')) {
			$this->Provincia->id = $id;
			if ($this->Provincia->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $provincia;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Provincia->delete($id)) {
			$this->Session->setFlash('La Provincia con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
