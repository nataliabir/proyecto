<?php
class PreguntasController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('preguntas', $this->Pregunta->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Pregunta no encontrado'));
		}
		$pregunta = $this->Pregunta->findById($id);
		if (!$pregunta) {
			throw new NotFoundException(__('Pregunta no encontrado'));
		}
			$this->set('pregunta', $pregunta);
	}
	
	
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Pregunta->create();
			if ($this->Pregunta->save($this->request->data)) {
				$this->Session->setFlash('la Pregunta se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La Pregunta no pudo ser grabado');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Pregunta no encontrado'));
		}
	
		$pregunta = $this->Pregunta->findById($id);
		if (!$pregunta) {
			throw new NotFoundException(__('Pregunta no encontrado'));
		}
	
		if ($this->request->is('pregunta') || $this->request->is('put')) {
			$this->Pregunta->id = $id;
			if ($this->Pregunta->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $pregunta;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Pregunta->delete($id)) {
			$this->Session->setFlash('La Pregunta con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
