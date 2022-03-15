<?php $__env->startSection('content'); ?>
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">

                <div class="col-lg-6 col-sm-12">
                    <div class="card">
                        <div class="card-header"><?php echo e(__('Case Stage Settings')); ?> </div>
                                <div class="card-body">
                                <div class="col-lg-12 mb-3">
                                    <?php if(session('stageSuccess')): ?>
                                    <div class="alert alert-success">
                                    <?php echo e(session('stageSuccess')); ?>

                                    </div>
                                    <?php endif; ?>
                                    <?php if(session('stageError')): ?>
                                    <div class="alert alert-danger">
                                    <?php echo e(session('stageError')); ?>

                                    </div>
                                    <?php endif; ?>
                                    <form id="case-stage" action="/create-stage" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group row">
                                            <div class="col-lg-12 mb-3">
                                                <label for="case-stage" class="col-form-label text-md-right"><?php echo e(__('Case Stage')); ?></label>

                                                <input id="case-stage" type="text" class="form-control <?php $__errorArgs = ['case-stage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="stage_name" value="<?php echo e(old('case-stage')); ?>" required autocomplete="off" autofocus>
                            
                                                <?php $__errorArgs = ['case-stage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="col-form-label text-md-right"><?php echo e(__('Type of Stage')); ?></label>
                                                <br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input <?php $__errorArgs = ['stage_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="radio" name="stage_type" id="inlineRadio1" value="lcs" checked>
                                                    <label class="form-check-label" for="inlineRadio1">Life Cycle Stage</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input <?php $__errorArgs = ['stage_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="radio" name="stage_type" id="inlineRadio2" value="ts">
                                                    <label class="form-check-label" for="inlineRadio2">Terminationg Stage</label>
                                                </div>
                                                </div>
                                                <?php $__errorArgs = ['stage_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                        <button type="submit" onclick="event.preventDefault();
                                        document.getElementById('case-stage').submit();"  class="btn btn-outline-primary">
                                            <?php echo e(__('Create Stage Type')); ?>

                                      </button>
                                      </form>
                                      
                                </div>
                                
                               
                            </div>
                        
                    </div>
                </div>
                
                <div class="col-lg-6 col-sm-12">
                    <div class="card">
                        <div class="card-header"><?php echo e(__('Form of Complaint')); ?> </div>
                                <div class="card-body">
                                <div class="col-lg-12 mb-3">
                                    <?php if(session('compSuccess')): ?>
                                    <div class="alert alert-success">
                                    <?php echo e(session('compSuccess')); ?>

                                    </div>
                                    <?php endif; ?>
                                    <?php if(session('compError')): ?>
                                    <div class="alert alert-danger">
                                    <?php echo e(session('compError')); ?>

                                    </div>
                                    <?php endif; ?>
                                    <form id="complaint-form" action="/create-complaint-form" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label for="complaint-form" class="col-form-label text-md-right"><?php echo e(__('Form of Complaint')); ?></label>
                                                
                                                <input id="complaint-form" type="text" class="form-control <?php $__errorArgs = ['complaint-form'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="complaint_form" value="<?php echo e(old('complaint-form')); ?>" required autocomplete="off" autofocus>
                            
                                                <?php $__errorArgs = ['complaint-form'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>

                                        <button type="submit"  class="btn btn-outline-primary" onclick="event.preventDefault();
                                        document.getElementById('complaint-form').submit();">
                                            <?php echo e(__('Create Complaint Form')); ?>

                                      </button>
                                      </form>
                                      
                                </div>
                                
                               
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
      
</main>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/ceo/DATA/All_Git_repo/nicn_cms/resources/views/settings.blade.php ENDPATH**/ ?>