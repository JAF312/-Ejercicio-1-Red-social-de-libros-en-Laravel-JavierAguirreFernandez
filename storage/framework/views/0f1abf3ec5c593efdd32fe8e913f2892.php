<h1>Valorar "<?php echo e($libro->titulo); ?>"</h1>

<form action="/libros/<?php echo e($libro->id); ?>/valoraciones" method="POST">
    <?php echo csrf_field(); ?>

    <p>
        Puntuación (1-5):
        <input type="number" name="puntuacion" min="1" max="5"
               value="<?php echo e(old('puntuacion')); ?>" required>
    </p>
    <?php $__currentLoopData = $errors->get('puntuacion'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div><?php echo e($error); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <p>
        Comentario:<br>
        <textarea name="comentario" rows="4" cols="50"><?php echo e(old('comentario')); ?></textarea>
    </p>
    <?php $__currentLoopData = $errors->get('comentario'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div><?php echo e($error); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <input type="submit" value="Enviar valoración">
</form>

<br>
<a href="/libros/<?php echo e($libro->id); ?>"><button>Cancelar</button></a><?php /**PATH /var/www/html/resources/views/libros/crear_valoracion.blade.php ENDPATH**/ ?>