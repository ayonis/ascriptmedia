
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
                Price EGY
              </th>
              <th>
                Price Dollar
              </th>
              <th>
                Price Bitcoins
              </th>
              <th>
                Video
              </th>
              <th>
                Sales
              </th>
              <th>
                Description
              </th>
              <th>
                Images
              </th>
              <th>
                Category
              </th>
              <th>
                Control
              </th>
            </thead>
            <tbody>
              <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              
              <?php 
              $images = DB::table('images')->where('p_id',$row->p_id)->get();
              ?>
              <tr>
                  <td><?php echo e($row->p_id); ?></td>
                  <td><?php echo e($row->p_name); ?></td>
                  <td><?php echo e($row->p_price_egp); ?></td>
                  <td><?php echo e($row->p_price_dollar); ?></td>
                  <td><?php echo e($row->p_price_bitcoins); ?></td>
                  <td><a href="<?php echo e($row->p_video); ?>" target="_blank"><?php echo e($row->p_video); ?></td>
                  <td><?php echo e($row->num_of_sales); ?></td>
                  <td><?php echo e($row->p_description); ?></td>
                  <td>
                  <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                  
                    <img height="150px" width="150px" style="padding:4px" src="<?php echo e(url('uploads/'.$image->img_path)); ?>" alt=""><br>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                  </td>
                  <td class="text-primary"><?php echo e($row->cat->c_name); ?></td>

                  <td class="text-primary" class="td-actions">

                    <!-- To make edit and delete buttoms is shared-->
                    <a href="<?php echo e('/dashboard/'.$routename.'/'.$row->p_id.'/edit'); ?>" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit">
                      <i class="material-icons">edit</i>
                    </a>

                    <form action="<?php echo e(route('dashboard/'.$routename.'.delete',['id' => $row->p_id])); ?>" method="POST">
                      <?php echo csrf_field(); ?>
                      <?php echo e(method_field('delete')); ?>

                      <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove">
                          <i class="material-icons">close</i>
                      </button>
                    </form>
                                       
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
<?php echo $__env->make('dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\job\ItCoreApps\task1(E-Commerce)\12-7\project\resources\views/dashboard/products/index.blade.php ENDPATH**/ ?>