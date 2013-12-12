<?php 
class ConvenioEspecifico extends AppModel { 
    var $name = 'ConvenioEspecifico'; 
    var $validate = array('fecha_ini' => array('rule' => 'notEmpty'),
    		'fecha_fin' => array('rule' => 'notEmpty'), 
    		'objetivo' => array('rule' => 'notEmpty'),
    		'estado' => array('rule' => 'notEmpty'),
    		'departamento_id' => array('rule' => 'notEmpty'),
    		'grupo_id' => array('rule' => 'notEmpty'),
  		    'comitente_id' => array('rule' => 'notEmpty'),
  		    'proyecto_id' => array('rule' => 'notEmpty')); 

    // RELACION CONVENIOESPECIFICO:DEPARTAMENTO 1:N 
    var $belongsTo = array( 
            'Departamento' => array( 
                    'className'     => 'Departamento', 
                    'foreignKey'    => 'departamento_id', 
                            ), 
    // RELACION CONVENIOESPECIFICO:GRUPO 1:N 
            'Grupo' => array( 
                    'className'     => 'Grupo', 
                    'foreignKey'    => 'grupo_id', 
                            ), 
    // RELACION CONVENIOESPECIFICO:COMITENTE 1:1 
            'Comitente' => array( 
                    'className'     => 'Comitente', 
                    'foreignKey'    => 'comitente_id', 
                            ), 
    // RELACION CONVENIOESPECIFICO:PROYECTO 1:1 
            'Proyecto' => array( 
                    'className'     => 'Proyecto', 
                    'foreignKey'    => 'proyecto_id', 
                            ), 
    // RELACION CONVENIOESPECIFICO:ENTIDADFIRMANTE 1:1
    		'EntidadFirmante' => array(
    				'className'     => 'EntidadFirmante',
    				'foreignKey'    => 'entidad_firmante_id',
   		)
   
    );
    //------------------------------------------------------------
    // RELACION CONVENIOESPECIFICO:ARCHIVOCONVENIO 1:1
    
    var $hasOne = array(
    		'ArchivoConvenio' => array(
    				'className'     => 'ArchivoConvenio',
    				'foreignKey'    => 'convenio_especifico_id',
    		),
   
    );
    
  } 
?>
