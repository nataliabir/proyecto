<?php
class RecursoMaterial extends AppModel {
	var $name = 'Recurso_Material';
	var $validate = array('descripcion' => array('rule' =>'notEmpty'),
			'frecuencia' => array('rule' => 'notEmpty'),
			'costo_total' => array('rule' => 'notEmpty'),
			'tipo' => array('rule' => 'notEmpty'),
			'plan_id' => array('rule' => 'notEmpty'),
			'rubro_id' => array('rule' => 'notEmpty'));	
	
	// RELACION RECURSOMATERIAL:PLAN 1:n
	var $hasMany = array(
			'Plan' => array(
					'className'     => 'Plan',
					'foreignKey'    => 'plan_id',
							)
                    	);
	// RELACION RECURSOMATERIAL:RUBRO 1:1
	var $hasOne = array(
			'Rubro' => array(
					'className'     => 'Rubro',
					'foreignKey'    => 'rubro_id',
			)
	);
	// RELACION RECURSOMATERIAL:FRECEUNCIA 1:1
	var $hasOne = array(
			'Frencuencia' => array(
					'className'     => 'Frecuencia',
					'foreignKey'    => 'frecuencia_id',
			)
	);
	
}
?>