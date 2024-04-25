



<?php $__env->startSection('title'); ?>
  <?php echo e($pageTitle); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('dashboard.layout.navbar', ['navbar_title' => $pageTitle]); ?>
<?php if (isset($__componentOriginal81190e7c6e9412bc659c32db3d7eed29b96e39f2)): ?>
<?php $component = $__componentOriginal81190e7c6e9412bc659c32db3d7eed29b96e39f2; ?>
<?php unset($__componentOriginal81190e7c6e9412bc659c32db3d7eed29b96e39f2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div class="content">
    <div class="container-fluid">
      
      <?php $__env->startComponent('dashboard.shared.table',['pageTitle' => $pageTitle, 'pageDes' => $pageDes]); ?>

        <?php $__env->slot('addButton'); ?>
          <div class="col-md-3 text-center">
            <a href="/dashboard/<?php echo e($routename); ?>/create" class="btn btn-dark btn-round">Add <?php echo e($routename); ?></a>
          </div>
        <?php $__env->endSlot(); ?> 
        
        <?php $__env->slot('table'); ?>
          <table class="table">
            <thead class=" text-primary">
              <th>
                ID
              </th>
              <th>
                Name
              </th>
              <th>
                E-mail
              </th>
              <th>
                Phone
              </th>
              <th>
                Address
              </th>
              <th>
                UserType
              </th>
              <th>
                Control
              </th>
            </thead>
            <tbody>
              <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                  <td><?php echo e($row->id); ?></td>
                  <td><?php echo e($row->name); ?></td>
                  <td><?php echo e($row->email); ?></td>
                  <td><?php echo e($row->phone); ?></td>
                  <td><?php echo e($row->address); ?></td>
                  <?php if($row->published == 1): ?>
                      published
                    <?php else: ?>
                      hidden  
                    <?php endif; ?>
                  <td class="text-primary">
                    <?php if($row->userType == 0): ?>
                      ADMIN
                    <?php else: ?>
                      USER
                    <?php endif; ?>
                  </td>
                  <td class="td-actions">

                    <!-- To make edit and delete buttoms is shared-->
                      <?php echo $__env->make('dashboard.shared.buttoms.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                      <?php echo $__env->make('dashboard.shared.buttoms.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                       
                  </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>   
          <?php echo e($rows->links()); ?> 
        <?php $__env->endSlot(); ?>
         
      <?php if (isset($__componentOriginal35a437dd5764aa9c0cd8617e36847d442f692ace)): ?>
<?php $component = $__componentOriginal35a437dd5764aa9c0cd8617e36847d442f692ace; ?>
<?php unset($__componentOriginal35a437dd5764aa9c0cd8617e36847d442f692ace); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\job\ItCoreApps\task1(E-Commerce)\12-7\project\resources\views/dashboard/users/index.blade.php ENDPATH**/ ?>