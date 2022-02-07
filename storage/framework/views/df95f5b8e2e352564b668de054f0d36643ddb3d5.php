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
                            <h3 class="mb-0"><?php echo e(__('Dodaj nowe materiały dydaktyczne')); ?></h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/material/" autocomplete="off">
                            <?php echo csrf_field(); ?>                           

                            <h6 class="heading-small text-muted mb-4"><?php echo e(__('Informacje o materiale')); ?></h6>
                            
                            <?php if(session('status')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo e(session('status')); ?>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>


                            <div class="pl-lg-4">
                                <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-name"><?php echo e(__('Tytuł')); ?></label>
                                    <input type="text" name="title" id="input-name" class="form-control form-control-alternative<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Tytuł')); ?>"  required autofocus>

                                    <?php if($errors->has('name')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-name"><?php echo e(__('Tematyka')); ?></label>
                                    <input type="text" name="subject" id="input-name" class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Teamtyka')); ?>"  required autofocus>

                                    <?php if($errors->has('name')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>                                                            
                                <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-description"><?php echo e(__('Zawartość')); ?></label>
                                    <textarea name="description" cols="100" rows="7" id="input-description" class="form-control form-control-alternative<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Zawartosć')); ?>"  required autofocus></textarea>                     
                                </div>                    


                                <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                                    <label class="btn btn-success mt-4" style="font-size: 15px;background-color: #5e72e4;border-color: #5e72e4; " for="input-file"><?php echo e(__('Dodaj Plik')); ?></label>
                                    <input type="file" name="file" id="input-file" class="form-control form-control-file" placeholder="<?php echo e(__('Pliki')); ?>"   autofocus>
                                </div>    


                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4"><?php echo e(__('Dodaj materiał')); ?></button>
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

<?php echo $__env->make('layouts.app', ['title' => __('User Profile')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spinProject\resources\views/materials/create.blade.php ENDPATH**/ ?>