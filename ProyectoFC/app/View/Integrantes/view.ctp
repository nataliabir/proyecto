<!-- File: /app/View/Integrante/view.ctp -->

<h1>Datos del Integrante</h1>
<p><?php echo h($integrante['Persona']['apellido']); ?></p>
<p><?php echo h($integrante['Integrante']['dedicacion']); ?></p>
<p><?php echo h($integrante['Integrante']['pago_mensual']); ?></p>
<p><?php echo h($integrante['Integrante']['valor_seguro']); ?></p>
<p><?php echo h($integrante['Integrante']['fecha_ini']); ?></p>
<p><?php echo h($integrante['Integrante']['fecha_fin']); ?></p>
<p><?php echo h($integrante['Integrante']['persona_id']); ?></p>
<p><?php echo h($integrante['Integrante']['categoria_persona_id']); ?></p>
<p><?php echo h($integrante['Rol']['descripcion']); ?></p>
<p><?php echo h($integrante['TipoPago']['descripcion']); ?></p>
