<h1><?php echo e($libro->titulo); ?></h1>

<p><strong>Autor:</strong> <?php echo e($libro->autor); ?></p>
<p><strong>Editorial:</strong> <?php echo e($libro->editorial); ?></p>
<p><strong>Año:</strong> <?php echo e($libro->anio); ?></p>
<p><strong>ISBN:</strong> <?php echo e($libro->isbn); ?></p>
<p><strong>Descripción:</strong> <?php echo e($libro->descripcion); ?></p>
<p><strong>Puntuación media:</strong> ⭐ <?php echo e($libro->promedioPuntuacion()); ?></p>

<a href="/libros/<?php echo e($libro->id); ?>/valoraciones">
    <button>Ver valoraciones</button>
</a>
&nbsp;
<a href="/libros/<?php echo e($libro->id); ?>/valoraciones/crear">
    <button>Añadir valoración</button>
</a>
&nbsp;
<a href="/libros"><button>Volver al listado</button></a><?php /**PATH /var/www/html/resources/views/libros/show.blade.php ENDPATH**/ ?>