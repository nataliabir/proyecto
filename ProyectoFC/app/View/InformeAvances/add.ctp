<!-- File: /app/View/InformeAvances/add.ctp -->

<h1>Nuevo Informe de Avance</h1>

<?php
	echo $this->Form->create('InformeAvance');
	echo $this->Form->input('fecha_fin_etapa');
	echo $this->Form->input('periodo_reporte_ini');
	echo $this->Form->input('periodo_reporte_fin');
	echo $this->Form->input('desvio');
	echo $this->Form->input('fecha_reporte');
	echo $this->Form->input('proyecto_id', array(
    'type'    => 'select',
    'options' => $proyectos,
    'empty'   => false
	));
	echo $this->Form->end('Guardar Informe de Avance');
?>
