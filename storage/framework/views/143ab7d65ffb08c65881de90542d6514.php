
<?php $__env->startSection('content'); ?>
<div class="container">
<h2>Education Details</h2>
<div>
  <?php if(session()->has('errors')): ?>
    
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="alert alert-danger" role="alert">
         <p><?php echo e($e); ?></p>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


  <?php endif; ?>
</div>
<form action="/education" method="POST">
  <?php echo csrf_field(); ?>
   <input type="text" name='school_name' placeholder="school_name">

   <input type="text" name='school_location' placeholder="school_location">

   <input type="text" name='degree' placeholder="degree">

   <input type="text" name='field_of_study' placeholder="field_of_study">
   <input type="date" name='graduation_start_date' placeholder="graduation_start_date">
   <input type="date" name='graduation_end_date' placeholder="graduation_end_date">

   
   <input type="submit" value="submit">



</form>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\resumehub\resources\views/education/create.blade.php ENDPATH**/ ?>