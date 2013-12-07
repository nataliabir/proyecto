<?php
App::import('Model', 'Departamento');
App::import('Model', 'Grupo');
App::import('Model', 'Comitente');
App::import('Model', 'Proyecto');
App::import('Model', 'EntidadFirmante');

class ConvenioEspecificosController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('convenioespecificos', $this->ConvenioEspecifico->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Convenio Especifico no encontrado'));
		}
		$convenioespecifico = $this->ConvenioEspecifico->findById($id);
		if (!$convenioespecifico) {
			throw new NotFoundException(__('Convenio Especifico no encontrado'));
		}
			$this->set('convenioespecifico', $convenioespecifico);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->ConvenioEspecifico->create();
			if ($this->ConvenioEspecifico->save($this->request->data)) {
				$this->Session->setFlash('El Convenio Especifico se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Convenio Especifico no pudo ser grabado');
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
			
			//Combo de Grupo
			$grupo = new Grupo();
			$grupos = $grupo->find('list', array(
					'fields' => array('Grupo.id', 'Grupo.nombre')
			));
			$this->set('grupos', $grupos);
				
			//Combo Comitente
			$comitente = new Comitente();
			$comitentes = $comitente->find('list', array(
					'fields' => array('Comitente.id', 'Comitente.nombre')
			));
			$this->set('comitentes', $comitentes);
			
			//Combo de Proyecto
			$proyecto = new Proyecto();
			$proyectos = $proyecto->find('list', array(
					'fields' => array('Proyecto.id', 'Proyecto.nombre')
			));
			$this->set('proyectos', $proyectos);
				
			//Combo de Entidad Firmnate
			$entidadfirmante = new EntidadFirmante();
			$entidadfirmantes = $entidadfirmante->find('list', array(
					'fields' => array('EntidadFirmante.id', 'EntidadFirmante.nombre')
			));
			$this->set('entidadfirmantes', $entidadfirmantes);
				
		
		
		}
}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Convenio Especifico no encontrado'));
		}
	
		$convenioespecifico = $this->ConvenioEspecifico->findById($id);
		if (!$convenioespecifico) {
			throw new NotFoundException(__('Convenio Especifico no encontrado'));
		}
	
		if ($this->request->is('convenioespecifico') || $this->request->is('put')) {
			$this->ConvenioEspecifico->id = $id;
			if ($this->ConvenioEspecifico->save($this->request->data)) {
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
			
			//Combo de Grupo
			$grupo = new Grupo();
			$grupos = $grupo->find('list', array(
					'fields' => array('Grupo.id', 'Grupo.nombre')
			));
			$this->set('grupos', $grupos);
				
			//Combo Comitente
			$comitente = new Comitente();
			$comitentes = $comitente->find('list', array(
					'fields' => array('Comitente.id', 'Comitente.nombre')
			));
			$this->set('comitentes', $comitentes);
			
			//Combo de Proyecto
			$proyecto = new Proyecto();
			$proyectos = $proyecto->find('list', array(
					'fields' => array('Proyecto.id', 'Proyecto.nombre')
			));
			$this->set('proyectos', $proyectos);
			
			//Combo de Entidad Firmnate
			$entidadfirmante = new EntidadFirmante();
			$entidadfirmantes = $entidadfirmante->find('list', array(
					'fields' => array('EntidadFirmante.id', 'EntidadFirmante.nombre')
			));
			$this->set('entidadfirmantes', $entidadfirmantes);

	}

		if (!$this->request->data) {
			$this->request->data = $convenioespecifico;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->ConvenioEspecifico->delete($id)) {
			$this->Session->setFlash('El Convenio Especifico con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
