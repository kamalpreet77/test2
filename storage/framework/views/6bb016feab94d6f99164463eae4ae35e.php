

<?php $__env->startSection('content'); ?>

<div class="container">
    <h2>Edit Education</h2>


    <form action="<?php echo e(route('education.update', $education)); ?>" method='POST'>
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

    <input type="text" name='school_name' placeholder='school name' value="<?php echo e($education->school_name); ?>">

        <input type="text" name='school_location' placeholder='location' value="<?php echo e($education->school_location); ?>">

        <input type="text" name='degree' placeholder='degree' value="<?php echo e($education->degree); ?>">

        <input type="text" name='field_of_study' placeholder='faculty' value="<?php echo e($education->field_of_study); ?>">

        <input type="date" name='graduation_start_date' value="<?php echo e($education->graduation_start_date); ?>">
        <input type="date" name='graduation_end_date' value="<?php echo e($education->graduation_end_date); ?>">

        <input type="submit" value="Save Education">

    </form>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\resumehub\resources\views/education/edit.blade.php ENDPATH**/ ?>