<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>

<script>
    $(document).ready(function(){
        var cat;
       
       
        <?php $__currentLoopData = App\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catCheck): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        $("#category-<?php echo e($catCheck->c_id); ?>").change(function() {
           
            $( "#indexDel" ).empty();
         

           if($(this).is(":checked"))
            {
              
                
              cat=$("#category-<?php echo e($catCheck->c_id); ?>").val();
              
               $.ajax({
                type: 'get',
                dataType: 'html',
                url: '<?php echo e(url("/productsCat")); ?>' ,
                data:{cat:cat},
                success:function(response){
                   
                   
                    $("#productData").append(response);
                }
            });
                
            }
           
           

           
            
         else if($(this).is(":not(:checked)"))
            {
             
                $(".<?php echo e($catCheck->c_id); ?>").remove();
           
            
            }
           
            if(!$(".checkSingle").is(":checked"))
            {
                $.ajax({
                type: 'get',
                dataType: 'html',
                url: '<?php echo e(url("/productsCatDel")); ?>',
               
                success:function(response){
                    
                   
                    $("#productData").append(response);
                }
            });
               
            }
          
        });
           
       

     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    });
</script><?php /**PATH H:\job\ItCoreApps\task1(E-Commerce)\12-7\project\resources\views/ourJs.blade.php ENDPATH**/ ?>