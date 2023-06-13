
<?php $__env->startSection('content'); ?>


<h2>Education Summary</h2>


<?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="card">
    <div class="card-body">
        <h4 class="card-title"> <?php echo e($e->degree); ?> <?php echo e($e->school_name); ?> (<?php echo e($e->graduation_start_date); ?> -
            <?php echo e($e->graduation_end_date); ?>)</h4>

        <a class="btn btn-sm btn-primary" href=" <?php echo e(route('education.edit', $e)); ?> " role="button">Edit</a>

        <form action="<?php echo e(route('education.destroy', $e)); ?>" method="POST" style="display: inline">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>

            <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<a  href=" <?php echo e(route('education.create')); ?> " role="button">+ Add another Education</a>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\resumehub\resources\views/education/index.blade.php ENDPATH**/ ?>