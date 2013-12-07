<?php
App::import('Model', 'Proyecto');


class ArchivosController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('archivos', $this->Archivo->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Archivo no encontrado'));
		}
		$archivo = $this->Archivo->findById($id);
		if (!$archivo) {
			throw new NotFoundException(__('Archivo no encontrado'));
		}
			$this->set('archivo', $archivo);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Archivo->create();
			if ($this->Archivo->save($this->request->data)) {
				$this->Session->setFlash('Archivo se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Archivo no pudo ser grabado');
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
}
	
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Archivo no encontrado'));
		}
	
		$archivo = $this->Archivo->findById($id);
		if (!$archivo) {
			throw new NotFoundException(__('Archivo no encontrado'));
		}
	
		if ($this->request->is('archivo') || $this->request->is('put')) {
			$this->Archivo->id = $id;
			if ($this->Archivo->save($this->request->data)) {
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
			$this->request->data = $archivo;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Archivo->delete($id)) {
			$this->Session->setFlash('El Archivo con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
