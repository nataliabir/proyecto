<!-- File: /app/View/ActaAcuerdos/add.ctp -->

<h1>Agregar Acta Acuerdo</h1>

<?php
	echo $this->Form->create('ActaAcuerdo');
	echo $this->Form->input('codigo');
	echo $this->Form->input('fecha_creacion');
	echo $this->Form->input('fecha_devolucion');
	echo $this->Form->input('firm_utn_nombre');
	echo $this->Form->input('firm_utn_dni');
	echo $this->Form->input('firm_utn_cargo');
	echo $this->Form->input('firm_comit_nombre');
	echo $this->Form->input('firm_comit_dni');
	echo $this->Form->input('firm_comit_cargo');			
	echo $this->Form->input('objetivo');
	echo $this->Form->input('fecha_firma');
	echo $this->Form->input('fecha_ini');
	echo $this->Form->input('fecha_fin');
	echo $this->Form->input('duracion');
	echo $this->Form->input('respons_comit');
	echo $this->Form->input('respons_utn');
	echo $this->Form->input('monto');
	echo $this->Form->input('estado');
	
	echo $this->Form->input('proyecto_id', array(
    'type'    => 'select',
    'options' => $proyectos,
    'empty'   => false
	));

	echo $this->Form->input('convenio_marco_id', array(
    'type'    => 'select',
    'options' => $conveniomarcos,
    'empty'   => false
	));
	
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
	
	echo $this->Form->input('entidad_firmante_id', array(
    'type'    => 'select',
    'options' => $entidadfirmantes,
    'empty'   => false
	));
	
	echo $this->Form->end('Guardar Acta Acuerdo');
?>
