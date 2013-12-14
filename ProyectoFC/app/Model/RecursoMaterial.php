<?php
class RecursoMaterial extends AppModel {
	var $name = 'RecursoMaterial';
	var $validate = array('descripcion' => array('rule' =>'notEmpty'),
			'frecuencia' => array('rule' => 'notEmpty'),
			'costo_total' => array('rule' => 'notEmpty'),
			'tipo' => array('rule' => 'notEmpty'),
			'plan_id' => array('rule' => 'notEmpty'),
			'rubro_id' => array('rule' => 'notEmpty'));	
	
	// RELACION RECURSOMATERIAL:PLAN 1:1
	var $belongsTo = array(
			'Plan' => array(
					'className'     => 'Plan',
					'foreignKey'    => 'plan_id',
							),
   // RELACION RECURSOMATERIAL:RUBRO 1:1
			'Rubro' => array(
					'className'     => 'Rubro',
					'foreignKey'    => 'rubro_id',
			),
	// RELACION RECURSOMATERIAL:FRECEUNCIA 1:1
			'Frecuencia' => array(
					'className'     => 'Frecuencia',
					'foreignKey'    => 'frecuencia_id',
			)
	);
	}
?>