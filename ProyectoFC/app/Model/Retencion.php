<?php
class Retencion extends AppModel {
	var $name = 'Retencion';
	var $validate = array('canon_inst' => array('rule' =>'notEmpty'),
			'canon_inst_monto' => array('rule' => 'notEmpty'),
			'fondo_reserva' => array('rule' => 'notEmpty'),
			'fondo_reserva_monto' => array('rule' => 'notEmpty'),
			'ente_ejecutor' => array('rule' => 'notEmpty'),
			'ente_ejecutor_monto' => array('rule' => 'notEmpty'),
			'proyecto_id' => array('rule' => 'notEmpty'));
	
	
	

	
	// RELACION RETENCION:PROYECTO 1:1
	var $hasOne = array(
			'Proyecto' => array(
					'className'     => 'Proyecto',
					'foreignKey'    => 'proyecto_id',
							)
                    	);
	
}
?>