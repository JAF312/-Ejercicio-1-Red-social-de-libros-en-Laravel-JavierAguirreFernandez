<h1>Creación de usuario</h1>
<form action="/usuarios" method="POST">
    <?php echo csrf_field(); ?>
<p>Nombre : <input type="text" name="name"></p>

<p>Email : <input type="text" name="email"></p>

<p>Contraseña : <input type="text" name="password"></p>
<input type="submit" value="Enviar">
</form>

<?php if($errors->any()): ?>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li> <?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
<?php endif; ?>

<a href="/usuarios"><button> Volver</button></a><?php /**PATH /var/www/html/resources/views/usuarios_crear.blade.php ENDPATH**/ ?>