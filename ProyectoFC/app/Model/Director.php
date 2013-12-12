<?php
class Director extends AppModel {
	var $name = 'Director';
	var $validate = array('descripcion' => array('rule' => 'notEmpty'));
    // Relacion Director:Integrante 1:1
	var $belognsTo = array(
			'Integrante' => array(
					'className'     => 'Integrante',
					'foreignKey'    => 'integrante_id',
			)
// 			,
// 			//Relación Director:Grupo 1.n
// 			'Grupo' => array(
// 					'className'     => 'Grupo',
// 					'foreignKey'    => 'grupo_id',
// 					'order'         => 'Director.id DESC'
// 			)
	);	

	//Relacion Director:Proyecto 1:n
	var $hasMany = array(
			'Proyecto' => array(
					'className'     => 'Proyecto',
					'foreignKey'    => 'director_id',
					//'conditions'  => array('Proyecto.estado_id' => '1'),
			)
	);
}
?>