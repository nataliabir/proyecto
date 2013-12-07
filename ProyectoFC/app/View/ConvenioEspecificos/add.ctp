<!-- File: /app/View/ConvenioEspecificos/add.ctp -->

<h1>Add Convenio Especifico</h1>

<?php
	echo $this->Form->create('ConvenioEspecifico');
	echo $this->Form->input('fecha_devolucion');
	echo $this->Form->input('responsable_utn');
	echo $this->Form->input('responsable_comit');
	echo $this->Form->input('fecha_ini');
	echo $this->Form->input('fecha_fin');
	echo $this->Form->input('fecha_firma');
	echo $this->Form->input('firm_utn_nombre');
	echo $this->Form->input('firm_utn_cargo');
	echo $this->Form->input('firm_comit_nombre');
	echo $this->Form->input('firm_comit_cargo');
	echo $this->Form->input('objetivo');
	echo $this->Form->input('duracion');
	echo $this->Form->input('observaciones');
	echo $this->Form->input('monto');
	echo $this->Form->input('estado');
     echo $this->Form->input('departamento_id', array(
    'type'    => 'select',
    'options' => $departamentos,
    'empty'   => false
	));


     echo $this->Form->input('grupo_id', array(
    'type'    => 'select',
    'options' => $grupos,
    'empty'   => false
	));

     echo $this->Form->input('comitente_id', array(
    'type'    => 'select',
    'options' => $comitentes,
    'empty'   => false
	));

     echo $this->Form->input('proyecto_id', array(
    'type'    => 'select',
    'options' => $proyectos,
    'empty'   => false
	));

	
     echo $this->Form->input('entidad_firmante_id', array(
    'type'    => 'select',
    'options' => $entidadfirmantes,
    'empty'   => false
	));

	echo $this->Form->end('Guardar Convenio Especifico');
?>
	 
