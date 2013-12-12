<!-- File: /app/View/FacEmitDetalle/view.ctp -->

<h1>Datos del Detalle de la Factura</h1>
<p><?php echo h($facemitdetalle['FacEmitDetalle']['descripcion']); ?></p>
<p><?php echo h($facemitdetalle['FacEmitDetalle']['cantidad']);?></p> 
<p><?php echo h($facemitdetalle['FacEmitDetalle']['monto']);?></p> 
<p><?php echo h($facemitdetalle['FacEmitDetalle']['rubro_id']);?></p> 
<p><?php echo h($facemitdetalle['FacturaEmitida']['nro_factura']);?></p> 

