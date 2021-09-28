
<?php $__env->startSection('content'); ?>
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-10 row">
    
                <div class="col-md-12 col-sm-12">
                    <div class="card ml-3">
                            <div class="card-header"><?php echo e(__('Add New Case')); ?></div>
                            <div class="card-body">
                                <?php if(session('success')): ?>
                                <div class="alert alert-success">
                                <?php echo e(session('success')); ?>

                                </div>
                                <?php endif; ?>
                                <?php if(session('error')): ?>
                                <div class="alert alert-danger">
                                <?php echo e(session('error')); ?>

                                </div>
                                <?php endif; ?>
                                <form method="POST" action="/case-form">
                                    <?php echo csrf_field(); ?>
                                    
                                    <div class="form-group row">
                                        <label for="division" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Division')); ?></label>
                            
                                        <div class="col-md-6">
                                            <select id="division" type="text" class="form-control <?php $__errorArgs = ['division'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="division" value="<?php echo e(old('division')); ?>" required>
                                                <option >Select Division</option>
                                                <option value="BAU">BAU</option>
                                                <option value="GMB">GMB</option>
                                                <option value="YL">YL</option>
                                            </select>
                            
                                            <?php $__errorArgs = ['division'];
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
                                    
                                    <div class="form-group row">
                                        <label for="case_id" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Case ID')); ?></label>
                            
                                        <div class="col-md-6">
                                            <input id="case_id" type="text" class="form-control <?php $__errorArgs = ['case_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="case_id" value="<?php echo e(old('case_id')); ?>" required autocomplete="off" autofocus />
                            
                                            <?php $__errorArgs = ['case_id'];
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
                                    
                                    <div class="form-group row">
                                        <label for="case_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Parties Involved')); ?></label>
                            
                                        <div class="col-md-6">
                                            <textarea id="case_name" type="case_name" class="form-control <?php $__errorArgs = ['case_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="case_name" value="<?php echo e(old('case_name')); ?>" required autocomplete="off"></textarea>
                            
                                            <?php $__errorArgs = ['case_name'];
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
                                    
                                    <div class="form-group row">
                                        <label for="case_subject" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Case Subject Matter')); ?></label>
                            
                                        <div class="col-md-6">
                                            <input id="case_subject" type="case_subject" class="form-control <?php $__errorArgs = ['case_subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="case_subject" value="<?php echo e(old('case_subject')); ?>" required autocomplete="off">
                            
                                            <?php $__errorArgs = ['case_subject'];
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
                                    
                                    <div class="form-group row">
                                        <label for="claimant" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Claimant')); ?></label>
                            
                                        <div class="col-md-6">
                                            <input id="claimant" type="text" class="form-control <?php $__errorArgs = ['claimant'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="claimant" value="<?php echo e(old('claimant')); ?>" required autocomplete="off" autofocus>
                            
                                            <?php $__errorArgs = ['claimant'];
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
                                    
                                    <div class="form-group row">
                                        <label for="defendant" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Defendant')); ?></label>
                            
                                        <div class="col-md-6">
                                            <input id="defendant" type="text" class="form-control <?php $__errorArgs = ['defendant'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="defendant" value="<?php echo e(old('defendant')); ?>" required autocomplete="off" autofocus>
                            
                                            <?php $__errorArgs = ['defendant'];
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
                                    
                                    <div class="form-group row">
                                        <label for="filing_date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Case Filing Date')); ?></label>
                            
                                        <div class="col-md-6">
                                            
                                                <input id="filing_date" type="text" class="form-control datepicker <?php $__errorArgs = ['filing_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> datepicker" name="filing_date" value="<?php echo e(old('filing_date')); ?>" required autocomplete="off" placeholder="Select Date">
                                                
                                            <?php $__errorArgs = ['filing_date'];
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
                                    
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-outline-primary">
                                                <?php echo e(__('Add Case')); ?>

                                            </button>
                                        </div>
                                    </div>
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






<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lbase\Documents\GitHub\laravel_projects\nicn_cms\resources\views/addCase.blade.php ENDPATH**/ ?>