<?php 
class ConvenioMarco extends AppModel { 
    var $name = 'Convenio_marco'; 
    var $validate = array('fecha_ini' => array('rule' => 'notEmpty'),
    		'fecha_creacion' => array('rule' => 'notEmpty'), 
    		'objetivo' => array('rule' => 'notEmpty'),
    		'estado' => array('rule' => 'notEmpty'),
    		'comitente_id' => array('rule' => 'notEmpty'));
  		       
    // RELACION CONVENIOMARCO:COMITENTE 1:1 
    
   var $hasOne = array( 
            'Comitente' => array( 
                    'className'     => 'Comitente', 
                    'foreignKey'    => 'comitente_id', 
                            ) 
                        );
   // RELACION CONVENIOMARCO:ENTIDADFIRMANTE 1:1
   
   var $hasOne = array(
   		'EntidadFirmante' => array(
   				'className'     => 'Entidad_Firmante',
   				'foreignKey'    => 'entidad_firmante_id',
   		)
   );
    //---------------------------------------------------------
   // RELACION CONVENIOMARCO:ACTAACUERDO 1:N
   
   var $belongsTo = array(
   		'ActaAcuerdo' => array(
   				'className'     => 'ActaAcuerdo',
   				'foreignKey'    => 'acta_acuerdo_id',
   		)
   );
   
   // RELACION CONVENIOMARCO:ARCHIVOCONVENIO 1:1
   
   var $belongsTo = array(
   		'ArchivoConvenio' => array(
   				'className'     => 'ArchivoConvenio',
   				'foreignKey'    => 'archivo_convenio_id',
   		)
   );
   

  } 
?>
