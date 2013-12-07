<?php
App::import('Model', 'Proyecto');
App::import('Model', 'ConvenioMarco');
App::import('Model', 'Departamento');
App::import('Model', 'Grupo');
App::import('Model', 'Comitente');
App::import('Model', 'EntidadFirmante');

class ActaAcuerdosController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('actaacuerdos', $this->ActaAcuerdo->find('all'));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Acta Acuerdo no encontrado'));
		}
		$actaacuerdo = $this->ActaAcuerdo->findById($id);
		if (!$actaacuerdo) {
			throw new NotFoundException(__('Acta Acuerdo no encontrado'));
		}
			$this->set('actaacuerdo', $actaacuerdo);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->ActaAcuerdo->create();
			if ($this->ActaAcuerdo->save($this->request->data)) {
				$this->Session->setFlash('El Acta Acuerdo se grabó correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Acta Acuerdo no pudo ser grabado');
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

	
	//Combo de Convenio Marco
	$conveniomarco = new ConvenioMarco();
	$conveniomarcos = $conveniomarco->find('list', array(
			'fields' => array('ConvenioMarco.id',  'ConvenioMarco.fecha_creacion')
	));
	$this->set('conveniomarcos', $conveniomarcos);
	
	
	//VER QUE MUESTRO EN EL COMBO PORQUE NO DEBERIA MOSTRAR LA FECHA DE CREACION
	
	
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
	
	//Combo de Comitente
	$comitente = new Comitente();
	$comitentes = $comitente->find('list', array(
			'fields' => array('Comitente.id', 'Comitente.nombre')
	));
	$this->set('comitentes', $comitentes);
	
	//Combo de Entidad Firmante
	$entidadfirmante = new EntidadFirmante();
	$entidadfirmantes = $entidadfirmante->find('list', array(
			'fields' => array('EntidadFirmante.id', 'EntidadFirmante.nombre')
	));
	$this->set('entidadfirmantes', $entidadfirmantes);
	
	
	}
	}
	
	
	
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Acta Acuerdo no encontrado'));
		}
	
		$actaacuerdo = $this->ActaAcuerdo->findById($id);
		if (!$actaacuerdo) {
			throw new NotFoundException(__('Acta Acuerdo no encontrado'));
		}
	
		if ($this->request->is('actaacuerdo') || $this->request->is('put')) {
			$this->ActaAcuerdo->id = $id;
			if ($this->ActaAcuerdo->save($this->request->data)) {
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

	
	//Combo de Convenio Marco
	$conveniomarco = new ConvenioMarco();
	$conveniomarcos = $conveniomarco->find('list', array(
			'fields' => array('ConvenioMarco.id',  'ConvenioMarco.fecha_creacion')
	));
	$this->set('conveniomarcos', $conveniomarcos);
	
	
	//VER QUE MUESTRO EN EL COMBO PORQUE NO DEBERIA MOSTRAR LA FECHA DE CREACION
	
	
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
	
	//Combo de Comitente
	$comitente = new Comitente();
	$comitentes = $comitente->find('list', array(
			'fields' => array('Comitente.id', 'Comitente.nombre')
	));
	$this->set('comitentes', $comitentes);
	
	//Combo de Entidad Firmante
	$entidadfirmante = new EntidadFirmante();
	$entidadfirmantes = $entidadfirmante->find('list', array(
			'fields' => array('EntidadFirmante.id', 'EntidadFirmante.nombre')
	));
	$this->set('entidadfirmantes', $entidadfirmantes);
	
	
	}

	
		if (!$this->request->data) {
			$this->request->data = $actaacuerdo;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->ActaAcuerdo->delete($id)) {
			$this->Session->setFlash('El Acta Acuerdo con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
