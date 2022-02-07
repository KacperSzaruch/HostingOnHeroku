<?php $__env->startSection('content'); ?>
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
                <div class="col-lg-12 col-10 text-right pb-4">                  
                </div>
                <div class="row pb-5">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card card-stats mb-12 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h1 font-weight-bold mb-0" style="font-size: 45px;"><?php echo e($material->title); ?></span>
                                    </div>                                    
                                        <div class="col-lg-6 col-5 text-right">
                                        <?php if(auth()->user()->id == $material->userID): ?>
                                        <a href="/material/delete/<?php echo e($material->id); ?>" class="btn btn-sm btn-danger">Usuń</a>                                                      
                                        <?php endif; ?>
                                    </div>
                                 </div>
                                 </br></br></br></br>
                                 <h4 class="card-title text-uppercase  mb-0"style="font-size: 25px;">Opis</h4>
                                 <span class="h3 font-weight-bold mb-0"><?php echo e($material->content); ?></span>
                                    </br></br>  </br> 
                                 <h4 class="card-title   mb-0"style="font-size: 25px;">Pliki do pobrania:</h4>
                                 <span class="h3 font-weight-bold mb-0 ml-1"><a href="#"><?php echo e($material->filename); ?></a></span>
                                   </br></br>  </br> 
                                 <h4 class="card-title   mb-0"style="font-size: 25px;">Autor</h4>
                                 <span class="h3 font-weight-bold mb-0 "><?php echo e($user->name); ?></span>
                                 </br>
                                 <div class="col-auto" style="min-height: 15px;">
                                        
                                 </div>
                            </div>
                        </div>
                    </div>                                   
                </div>
        </div>
    </div>
</div>
    
    
    <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('argon')); ?>/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo e(asset('argon')); ?>/vendor/chart.js/dist/Chart.extension.js"></script>
<?php $__env->stopPush(); ?>



<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spinProject\resources\views/materials/show.blade.php ENDPATH**/ ?>