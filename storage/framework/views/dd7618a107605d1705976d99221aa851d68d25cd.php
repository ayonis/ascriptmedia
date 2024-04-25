<form action="<?php echo e(route('dashboard/'.$routename.'.delete',['id' => $row->id])); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo e(method_field('delete')); ?>

    <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove">
        <i class="material-icons">close</i>
    </button>
</form><?php /**PATH H:\job\ItCoreApps\task1(E-Commerce)\12-7\project\resources\views/dashboard/shared/buttoms/delete.blade.php ENDPATH**/ ?>