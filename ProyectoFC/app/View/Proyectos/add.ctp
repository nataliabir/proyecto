<!-- File: /app/View/Proyectos/add.ctp -->
<h1>Add Proyecto</h1>
<?php
	echo $this->Form->create('Proyecto');
	echo $this->Form->input('nombre');
	echo $this->Form->input('fecha_ini_real');
	echo $this->Form->input(' fecha_fin_real ');
	echo $this->Form->input('presupuesto_real');
	echo $this->Form->input('fecha_retorno_acta');
	echo $this->Form->input('coordinador');
	echo $this->Form->input('aval_legal');
	echo $this->Form->input('aval_dpto');
	echo $this->Form->input('aval_admin');
	echo $this->Form->input('aval_seu');
	
	echo $this->Form->input('categoria_id', array(
    'type'    => 'select',
    'options' => $categorias,
    'empty'   => false
	));
	echo $this->Form->input('departamento_id', array(
    'type'    => 'select',
    'options' => $departamentos,
    'empty'   => false
	));
		echo $this->Form->input('contacto_id', array(
    'type'    => 'select',
    'options' => $contactos,
    'empty'   => false
	));
	echo $this->Form->input('director_id', array(
    'type'    => 'select',
    'options' => $directors,
    'empty'   => false
	));
		echo $this->Form->input('clasificacion_id', array(
    'type'    => 'select',
    'options' => $clasificacions,
    'empty'   => false
	));
	echo $this->Form->input('referente_id', array(
    'type'    => 'select',
    'options' => $referentes,
    'empty'   => false
	));
	echo $this->Form->input('estado_id', array(
    'type'    => 'select',
    'options' => $estados,
    'empty'   => false
	));
	echo $this->Form->end('Guardar Proyecto');
?>
