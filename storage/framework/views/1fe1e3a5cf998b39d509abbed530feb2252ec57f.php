
<?php $__env->startSection('container'); ?>
<!--              start for me

 -->    <!--   <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>"/><script src="https://kit.fontawesome.com/a076d05399.js"></script> -->

 
          <!-- container -->
    <div class="container">
            <!-- row -->
           <div class="section">
            <h2>YOUR CART</h2>
            <div class="container">
              <div class="row " >
 <?php if(count($cart)): ?>

         <?php $__currentLoopData = $cart->sortBy('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
          <div class="well col-sm-12" >
            <div class="container-fluid">
              <div class="row " >             

            <div class="col-sm-6 col-xs-12 col-md-3 ">
               <a class="btn btn-danger left  "  href="cart/delete/<?php echo e($item->id); ?>" style="float: left;">X</a>
               <br>
             <?php if( $item->attributes->has('image') ): ?>
               <img src="./img/<?php echo e($item->attributes->image); ?>" class="rounded  d-block" alt="..." max-width="100px"  max-height="100px" height="100" width="100">
             <?php endif; ?> <br>
                    <?php echo e($item->name); ?>


            </div> 
            <div class="col-sm-6 col-xs-12 col-md-3 ">
                   <h4>Price</h4>
           <b> Dollar :</b><i class="fa fa-usd"></i> <?php echo e($item->price); ?><br>
               <?php if( $item->attributes->has('priceBitcoin') ): ?>
               <b> EGP :</b><i class="fa fa-gbp"></i> <?php echo e(number_format($item->attributes->priceEgy,2)); ?><br>
               <?php endif; ?>
               <?php if( $item->attributes->has('priceBitcoin') ): ?>
               <b> BitCoin :</b> <i class="fa fa-btc"></i> <?php echo e(number_format($item->attributes->priceBitcoin,7)); ?><br>
               <?php endif; ?>

            </div>
            <div class="col-sm-6 col-xs-12 col-md-3 "> 
            <h4>Quantity</h4>           
              <form class="form-inline  " action="<?php echo e(url('/cart/update')); ?>" role="form" method="POST" >
                                               <?php echo csrf_field(); ?>
                  
                     
                    <input type="hidden" name="item_id" value="<?php echo e($item->id); ?>">
                   
                    <input type="number" name="qty" value="<?php echo e($item->quantity); ?>" class="form-control col-sm-2  " min="0" >
                    <button  type="submit" class="btn btn-info " >OK</button>
                  
              </form>
            </div>
            <div class="col-sm-6 col-xs-12 col-md-3 ">
              <h4>Sum price</h4>
              <b>dollar : </b> <i class="fa fa-usd"></i> <?php echo e($item->getPriceSum()); ?>   <br>
               <?php if( $item->attributes->has('priceEgy') ): ?>
               <b>EGP : </b> <i class="fa fa-gbp"></i> <?php echo e(number_format($item->attributes->priceEgy * $item->quantity,2)); ?> <br>
               <?php endif; ?>
               <?php if( $item->attributes->has('priceBitcoin') ): ?>
               <b>BitCoin :</b> <i class="fa fa-btc"></i> <?php echo e(number_format($item->attributes->priceBitcoin * $item->quantity,7)); ?> 
               <?php endif; ?><br>
            </div>
          </div>
            
            
          </div>
                   
              </div>     
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
           
           <div class="well col-sm-12 bg-info " >
            <div class="container-fluid">
            <div class="row "> 
        <div class="col-sm-6 col-xs-12 col-md-3 "> 
            <h3>Summery</h3><br>
            <b> Items: </b>  <?php echo e($cart->count()); ?><br>
            <b>SubTotal :</b><br> 
            <b>Dollar :</b>
            <i class="fa fa-usd"></i>  <?php echo e(\Cart::getSubTotal()); ?><br>
            
          
            <b> Bitcoin :  </b> <i class="fa fa-btc"></i>

            <?php echo e(number_format( $totalpriceBitcoin,7)); ?><br>
          
           
            <b> egp :   </b><i class="fa fa-gbp"></i> <?php echo e(number_format($totalpriceEgp,2)); ?><br>
           
         
        </div> 
                         
          >
       
          <div class="col-sm-6 col-xs-12 col-md-3"> 
            <h3>Final Action</h3><br>
                                     <br>
            <a  href="<?php echo e(url('checkout')); ?>" class="btn btn-info " style="margin:5px">Checkout <i class='fas fa-money-bill-alt'></i></a>
                        <a class="btn btn-danger "  href="cart/destroy ">Delete Cart</a><br>

          </div>
           
      </div>
   
         </div>
        </div>
        
          <?php endif; ?>

 </div>
<a href='<?php echo e(url("/")); ?>' class="btn btn-danger " >continue shopping <i class="fa fa-arrow-circle-left"></i></a>
          <hr>
</div>
  </div> </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\job\ItCoreApps\task1(E-Commerce)\12-7\project\resources\views/cart.blade.php ENDPATH**/ ?>