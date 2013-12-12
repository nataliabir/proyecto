<!-- File: /app/View/ConvenioMarcos/edit.ctp -->

<h1>Edit ConvenioMarco</h1>
<?php
    echo $this->Form->create('ConvenioMarco');
    echo $this->Form->input('codigo');
   	echo $this->Form->input('fecha_creacion');
	echo $this->Form->input('fecha_firma');
	echo $this->Form->input('fecha_fin');
	echo $this->Form->input('fecha_devolucion');
	echo $this->Form->input('firm_utn_nombre');
	echo $this->Form->input('firm_utn_cargo');
	echo $this->Form->input('firm_comit_nombre');
	echo $this->Form->input('firm_comit_cargo');
	echo $this->Form->input('objetivo');
	echo $this->Form->input('duracion');
	echo $this->Form->input('observaciones');
	echo $this->Form->input('estado');
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
	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Convenio Marco');
    
?>
