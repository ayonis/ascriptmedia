

<?php $__env->startSection('title'); ?>
    Dashboard    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('dashboard.layout.navbar', ['navbar_title' => 'Home Page']); ?>
        <?php $__env->slot('$navbat_title'); ?>
            Home Page    
        <?php $__env->endSlot(); ?> 

        
    <?php if (isset($__componentOriginal81190e7c6e9412bc659c32db3d7eed29b96e39f2)): ?>
<?php $component = $__componentOriginal81190e7c6e9412bc659c32db3d7eed29b96e39f2; ?>
<?php unset($__componentOriginal81190e7c6e9412bc659c32db3d7eed29b96e39f2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <p class="card-category">Users</p>
              <h3 class="card-title"><?php echo e(\App\Models\User::count()); ?>


              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-warning">warning</i>
                <a href="<?php echo e(route('users.index')); ?>" class="warning-link" style="font-size: 15px">Get All Users...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Categories</p>
              <h3 class="card-title"><?php echo e(\App\Models\Category::count()); ?></h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i>
                <a href="<?php echo e(route('categories.index')); ?>" style="font-size: 15px">Get All Categories...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Products</p>
              <h3 class="card-title"><?php echo e(\App\Models\Product::count()); ?></h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i> 
                <a href="<?php echo e(route('products.index')); ?>" style="font-size: 15px">Get All Products...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-cart-plus"></i>
              </div>
              <p class="card-category">Orders</p>
              <h3 class="card-title"><?php echo e(\App\Models\Order::count()); ?></h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> 
                <a href="<?php echo e(route('orders.index')); ?>" style="font-size: 15px">Get All Orders...</a>
                
              </div>
            </div>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\job\ItCoreApps\task1(E-Commerce)\12-7\project\resources\views/dashboard/home.blade.php ENDPATH**/ ?>