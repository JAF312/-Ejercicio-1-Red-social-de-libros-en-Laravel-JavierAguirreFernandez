<h1>Valoración de "<?php echo e($libro->titulo); ?>"</h1>

<p><strong>Usuario:</strong> <?php echo e($valoracion->user->name); ?></p>
<p><strong>Puntuación:</strong> ⭐ <?php echo e($valoracion->puntuacion); ?>/5</p>
<p><strong>Comentario:</strong> <?php echo e($valoracion->comentario ?? 'Sin comentario.'); ?></p>
<p><strong>Fecha:</strong> <?php echo e($valoracion->created_at->format('d/m/Y')); ?></p>

<a href="/libros/<?php echo e($libro->id); ?>/valoraciones">
    <button>Volver a valoraciones</button>
</a><?php /**PATH /var/www/html/resources/views/libros/valoracion.blade.php ENDPATH**/ ?>