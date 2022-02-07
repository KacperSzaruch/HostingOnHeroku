<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('users.partials.header', [
        'title' => __('') ,       
        'class' => 'col-lg-7'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   

    <div class="container-fluid mt--7">
        <div class="row">            
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0"><?php echo e(__('Zadaj nowe pytanie')); ?></h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/question/" autocomplete="off">
                            <?php echo csrf_field(); ?>                           

                            <h6 class="heading-small text-muted mb-4"><?php echo e(__('Informacje o pytaniu')); ?></h6>                           
                            


                            <div class="pl-lg-4">
                                <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-name"><?php echo e(__('Treść')); ?></label>
                                    <input type="text" name="question" id="input-name" class="form-control form-control-alternative<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Treść')); ?>"  required autofocus>

                                    <?php if($errors->has('name')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-subject"><?php echo e(__('Tematyka')); ?></label>
                                    <input type="text" name="subject" id="input-subject" class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Teamtyka')); ?>"  required autofocus>
                                </div>

                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" name="type" value="anonymous" id="anonymousType" type="checkbox">
                                    <label class="custom-control-label" for="anonymousType">
                                        <span class="text-muted"><?php echo e(__('Chcę pozostać ')); ?> <a href="#!"><?php echo e(__('Anonimowy')); ?></a></span>
                                    </label>
                                </div>
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4"><?php echo e(__('Zadaj Pytanie')); ?></button>
                                </div>
                            </div>
                        </form>                    
                     </div>
                </div>
            </div>
        </div>        
        <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __('User Profile')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spinProject\resources\views/questions/create.blade.php ENDPATH**/ ?>