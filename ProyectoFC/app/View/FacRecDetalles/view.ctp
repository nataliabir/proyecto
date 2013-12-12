<!-- File: /app/View/FacRecDetalle/view.ctp -->

<h1>Datos del Detalle de Factura</h1>
<p><?php echo h($facrecdetalle['FacRecDetalle']['descripcion']); ?></p>
<p><?php echo h($facrecdetalle['FacRecDetalle']['cantidad']);?></p> 
<p><?php echo h($facrecdetalle['FacRecDetalle']['monto']);?></p> 
<p><?php echo h($facrecdetalle['FacRecDetalle']['rubro_id']);?></p> 
<p><?php echo h($facrecdetalle['FacturaRecibida']['nro_factura']);?></p> 