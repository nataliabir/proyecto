<?php
class CategoriaIvasController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('categoriaivas', $this->CategoriaIva->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Categoria Iva no encontrado'));
		}
		$categoriaiva = $this->CategoriaIva->findById($id);
		if (!$categoriaiva) {
			throw new NotFoundException(__('Categoria Iva no encontrado'));
		}
			$this->set('categoriaiva', $categoriaiva);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoriaIva->create();
			if ($this->CategoriaIva->save($this->request->data)) {
				$this->Session->setFlash('La categoria Iva se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La categoria Iva no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Categoria Iva no encontrado'));
		}
	
		$categoriaiva = $this->CategoriaIva->findById($id);
		if (!$categoriaiva) {
			throw new NotFoundException(__('categoria iva no encontrado'));
		}
	
		if ($this->request->is('categoriaiva') || $this->request->is('put')) {
			$this->CategoriaIva->id = $id;
			if ($this->CategoriaIva->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $categoriaiva;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->CategoriaIva->delete($id)) {
			$this->Session->setFlash('La categoria Iva con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
