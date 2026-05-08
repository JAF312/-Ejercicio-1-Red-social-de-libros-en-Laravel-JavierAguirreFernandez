<h1>Listado de libros</h1>

<ul>
    <?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href="/libros/<?php echo e($libro->id); ?>">
                <strong><?php echo e($libro->titulo); ?></strong> — <?php echo e($libro->autor); ?>

            </a>
            &nbsp;&nbsp;
            <a href="/libros/<?php echo e($libro->id); ?>/valoraciones">
                <button>Ver valoraciones (⭐ <?php echo e($libro->promedioPuntuacion()); ?>)</button>
            </a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<form action="/logout" method="POST" style="display:inline">
    <?php echo csrf_field(); ?>
    <button type="submit">Cerrar sesión</button>
</form><?php /**PATH /var/www/html/resources/views/libros/index.blade.php ENDPATH**/ ?>