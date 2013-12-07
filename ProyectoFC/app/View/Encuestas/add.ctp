<!-- File: /app/View/Encuestas/add.ctp -->

<h1>Nueva Encuesta</h1>

<?php
	echo $this->Form->create('Encuesta');
	echo $this->Form->input('fecha');
	echo $this->Form->input('primer_proy_UTN');
	echo $this->Form->input('informado_OT');
	echo $this->Form->input('informado_UVT');
	echo $this->Form->input('eleccion_UTN');
	echo $this->Form->input('volveria_elegir_UTN');
	echo $this->Form->input('motivo');
	echo $this->Form->input('asesoramiento_previo');
	echo $this->Form->input('frecuencia_contacto');
	echo $this->Form->input('cumplimiento');
	echo $this->Form->input('trato_profesionales');
	echo $this->Form->input('atencion_reclamos');
	echo $this->Form->input('producto_entregado');
	echo $this->Form->input('satisfaccion_expectativa');
	echo $this->Form->input('evaluacion_general');
	echo $this->Form->input('observaciones');
	echo $this->Form->input('proyecto_id', array(
    'type'    => 'select',
    'options' => $proyectos,
    'empty'   => false
	));
	echo $this->Form->end('Guardar Encuesta');
?>
