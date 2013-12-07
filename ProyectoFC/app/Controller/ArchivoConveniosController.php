<?php
App::import('Model', 'ActaAcuerdo');
App::import('Model', 'ConvenioMarco');
App::import('Model', 'ConvenioEspecifico');
class ArchivoConveniosController extends AppController {
	public $helpers = array('Html', 'Form','Session');
	public $components =array('Session');
	
	public function index() {
		$this->set('archivoconvenios', $this->ArchivoConvenio->find('all'));
	}
	
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Archivo Convenios no encontrado'));
		}
		$archivoconvenio = $this->ArchivoConvenio->findById($id);
		if (!$archivoconvenio) {
			throw new NotFoundException(__('Archivo no encontrado'));
		}
			$this->set('archivoconvenio', $archivoconvenio);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->ArchivoConvenio->create();
			if ($this->ArchivoConvenio->save($this->request->data)) {
				$this->Session->setFlash('El Archivo Convenio se grabó correctamente');
				$this->redirect(array('action' => 'index'));
				} else {
				$this->Session->setFlash('El Archivo convenio no pudo ser grabado');
			}
		}
	else
	{	
	//Combo de Acta Acuerdo
	$actaacuerdo = new ActaAcuerdo();
	$actaacuerdos = $actaacuerdo->find('list', array(
			'fields' => array('ActaAcuerdo.id', 'ActaAcuerdo.fecha_creacion')
	));
	$this->set('actaacuerdos', $actaacuerdos);
	
	//Combo de Convenio Marco
	$conveniomarco = new conveniomarco();
	$conveniomarcos = $conveniomarco->find('list', array(
			'fields' => array('ConvenioMarco.id', 'ConvenioMarco.fecha_creacion')
	));
	$this->set('conveniomarcos', $conveniomarcos);
	
	//Combo de Convenio Especifico
	$convenioespecifico = new convenioespecifico();
	$convenioespecificos = $convenioespecifico->find('list', array(
			'fields' => array('ConvenioEspecifico.id', 'ConvenioEspecifico.fecha_firma')
	));
	$this->set('convenioespecificos', $convenioespecificos);
					
	}
	}
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Archivo no encontrado'));
		}
	
		$archivoconvenio = $this->ArchivoConvenio->findById($id);
		if (!$archivoconvenio) {
			throw new NotFoundException(__('Archivo no encontrado'));
		}
	
		if ($this->request->is('archivoconvenio') || $this->request->is('put')) {
			$this->ArchivoConvenio->id = $id;
			if ($this->ArchivoConvenio->save($this->request->data)) {
				$this->Session->setFlash('Los datos se actualizaron correctamente');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los datos no fueron actualizados');
			}
		}
else
	{	
	//Combo de Acta Acuerdo
	$actaacuerdo = new ActaAcuerdo();
	$actaacuerdos = $actaacuerdo->find('list', array(
			'fields' => array('ActaAcuerdo.id', 'ActaAcuerdo.fecha_creacion')
	));
	$this->set('actaacuerdos', $actaacuerdos);
	
	//Combo de Convenio Marco
	$conveniomarco = new conveniomarco();
	$conveniomarcos = $conveniomarco->find('list', array(
			'fields' => array('ConvenioMarco.id', 'ConvenioMarco.fecha_creacion')
	));
	$this->set('conveniomarcos', $conveniomarcos);
	
	//Combo de Convenio Especifico
	$convenioespecifico = new convenioespecifico();
	$convenioespecificos = $convenioespecifico->find('list', array(
			'fields' => array('ConvenioEspecifico.id', 'ConvenioEspecifico.fecha_firma')
	));
	$this->set('convenioespecificos', $convenioespecificos);

	}
		if (!$this->request->data) {
			$this->request->data = $archivoconvenio;
		}
	}
		public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->ArchivoConvenio->delete($id)) {
			$this->Session->setFlash('El Archivo Convenio con ID: ' . $id . ' fue borrado');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>
