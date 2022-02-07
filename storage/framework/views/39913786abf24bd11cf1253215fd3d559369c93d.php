<?php $__env->startSection('content'); ?>
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
                <div class="col-lg-12 col-10 text-right pb-4">
                  <a href="/workshop/create" class="btn btn-sm btn-neutral">Dodaj</a>
                  <a href="#" class="btn btn-sm btn-neutral">Filtry</a>
                </div>
                <?php for($i = 0; $i < count($workshops); $i += 2): ?>
                <div class="row pb-5">

                    
                    <div class="col-xl-6 col-lg-12">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Temat</h5>
                                        <span class="h2 font-weight-bold mb-0"><a href="/workshop/<?php echo e($workshops[$i]->id); ?>"><?php echo e($workshops[$i]->title); ?></a></span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="ni ni-single-02"></i>
                                        </div>
                                    </div>
                                 </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text mr-2"> Prowadzący: </span>
                                    <span class="text-nowrap"><?php echo e($workshops[$i]->author); ?></span>                       
                                </p>
                            </div>
                        </div>
                    </div>


                    <?php if($i + 1 != count($workshops)): ?>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Temat</h5>
                                        <span class="h2 font-weight-bold mb-0"><a href="/workshop/<?php echo e($workshops[$i+1]->id); ?>"><?php echo e($workshops[$i+1]->title); ?></a></span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="ni ni-single-02"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text mr-2">Prowadzący</span>
                                    <span class="text-nowrap"><?php echo e($workshops[$i+1]->author); ?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                   
                </div>
                <?php endfor; ?>                
        </div>
    </div>
</div>
    
    
    <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('argon')); ?>/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo e(asset('argon')); ?>/vendor/chart.js/dist/Chart.extension.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spinProject\resources\views/workshops/index.blade.php ENDPATH**/ ?>