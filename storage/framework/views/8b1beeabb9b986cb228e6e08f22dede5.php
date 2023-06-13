
<?php $__env->startSection('content'); ?>
<div class="container">
<h2>Tell Us About Yourself</h2>
<div>
  <?php if(session()->has('errors')): ?>
    
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="alert alert-danger" role="alert">
         <p><?php echo e($e); ?></p>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


  <?php endif; ?>
</div>
<form action="/user-detail" method="POST">
  <?php echo csrf_field(); ?>
   <input type="text" name='fullname' placeholder="fullname">

   <input type="text" name='email' placeholder="email">

   <input type="text" name='phone' placeholder="phone">

   <input type="text" name='address' placeholder="address">
   
   <input type="submit" value="submit">



</form>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\resumehub\resources\views/user_detail/create.blade.php ENDPATH**/ ?>