<h1>Creación de usuario</h1>
<form action="/usuarios/<?php echo e($usuario->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field("PUT"); ?>
    <p>Nombre :<input type="text" name="name" value="<?php echo e($usuario->name); ?>"></p>
    <p>Email :<input type="text" name="email" value="<?php echo e($usuario->email); ?>"></p>
    <p>Contraseña :<input type="text" name="password" ></p>
    <input type="submit" value="Modificar">
</form>
<?php /**PATH /var/www/html/resources/views/usuario_editar.blade.php ENDPATH**/ ?>