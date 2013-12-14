<?php
App::import('Model', 'Pregunta');
App::import('Model', 'Cierre');

class PregcierresController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('pregcierres', $this->Pregcierre->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Pregunta Cierre no encontrado'));
		}
		$preg_cierre = $this->Pregcierre->findById($id);
		if (!$pregcierre) {
			throw new NotFoundException(__('Pregunta Cierre no encontrado'));
		}
			$this->set('pregcierre', $pregcierre);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Pregcierre->create();
			if ($this->Pregcierre->save($this->request->data)) {
				$this->Session->setFlash('la Pregunta de cierre se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La Pregunta de cierre no pudo ser grabado');
			}
		}
		else
		{
		
			//Combo de Cierre
			$cierre = new Cierre();
			$cierres = $cierre->find('list', array(
					'fields' => array('Cierre.id', 'Cierre.observaciones')
			));
			$this->set('cierres', $cierres);
			
			//Combo de pregunta
			$pregunta = new Pregunta();
			$preguntas = $pregunta->find('list', array(
					'fields' => array('Pregunta.id', 'Pregunta.nombre')
			));
			$this->set('preguntas', $preguntas);
		
		}
		
		}
	
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Pregunta de cierre no encontrado'));
		}
	
		$pregcierre = $this->Pregcierre->findById($id);
		if (!$pregcierre) {
			throw new NotFoundException(__('Pregunta de Cierre no encontrado'));
		}
	
		if ($this->request->is('pregcierre') || $this->request->is('put')) {
			$this->Pregcierre->id = $id;
			if ($this->Pregcierre->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
		else
		{
		
			//Combo de Cierre
			$cierre = new Cierre();
			$cierres = $cierre->find('list', array(
					'fields' => array('Cierre.id', 'Cierre.observaciones')
			));
			$this->set('cierres', $cierres);
				
			//Combo de pregunta
			$pregunta = new Pregunta();
			$preguntas = $pregunta->find('list', array(
					'fields' => array('Pregunta.id', 'Pregunta.nombre')
			));
			$this->set('preguntas', $preguntas);
		
		}
		
		
		
	
		if (!$this->request->data) {
			$this->request->data = $pregcierre;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Pregcierre->delete($id)) {
			$this->Session->setFlash('La Pregunta de cierre con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
