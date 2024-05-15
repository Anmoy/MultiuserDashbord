

    <h1>Register</h1>

    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p style="color:red;"><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <form action="<?php echo e(route('register')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <input type="text" name="name" placeholder="Enter Name">
        <br><br>
        <input type="email" name="email" placeholder="Enter Email">
        <br><br>
        <input type="password" name="password" placeholder="Enter Password">
        <br><br>
        <input type="password" name="password_confirmation" placeholder="Enter Confirm Password">
        <br><br>
        <input type="submit" value="Register">

    </form>

    <?php if(Session::has('success')): ?>
        <p style="color:green;"><?php echo e(Session::get('success')); ?></p>
    <?php endif; ?>
<?php /**PATH E:\XAMPP 02-08-2022\htdocs\LARAVEL-8\multi-user\resources\views/register.blade.php ENDPATH**/ ?>