<!-- File: /app/View/ArchivoConvenios/edit.ctp -->

<h1>Edit Archivo Convenios</h1>
<?php
    echo $this->Form->create('ArchivoConvenio');
    echo $this->Form->input('nombre');
    echo $this->Form->input('ruta');
    echo $this->Form->input('tipo');
    
    echo $this->Form->input('acta_acuerdo_id', array(
    'type'    => 'select',
    'options' => $actaacuerdos,
    'empty'   => false
	));
	
	echo $this->Form->input('convenio_marco_id', array(
    'type'    => 'select',
    'options' => $conveniomarcos,
    'empty'   => false
	));
	
	echo $this->Form->input('convenio_especifico_id', array(
    'type'    => 'select',
    'options' => $convenioespecificos,
    'empty'   => false
	));

 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Archivo Convenios');
    
?>
