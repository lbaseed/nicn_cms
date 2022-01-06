<?php $__env->startSection('content'); ?>
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header"><?php echo e(__('Archive Case')); ?></div>
                        <div class="card-body">
                            
                            <form method="POST" action="/archive-case">
                                <?php echo csrf_field(); ?>
                                
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
                                
                                <div class="form-group row">
                                    <label for="case_id" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Case ID')); ?></label>
                        
                                    <div class="col-md-6">
                                        <select id="case_id" type="text" class="form-control <?php $__errorArgs = ['case_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="case_id" required>
                                            <option value="">Select Case ID</option>
                                                <?php if(count($cases)>0): ?>
                                                    <?php $__currentLoopData = $cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($case->id); ?>"><?php echo e($case->case_id); ?> [ <?php echo e($case->case_name); ?>]</option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                        </select>
                        
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
                                    <label for="termination_date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Case Termination Date')); ?></label>
                        
                                    <div class="col-md-6">
                                        <input id="termination_date" type="text" class="form-control datepicker <?php $__errorArgs = ['termination_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="termination_date" required autocomplete="off">
                        
                                        <?php $__errorArgs = ['termination_date'];
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
                                    <label for="form_of_termination" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Termination Form')); ?></label>
                        
                                    <div class="col-md-6">
                                        <select id="form_of_termination" type="text" class="form-control <?php $__errorArgs = ['form_of_termination'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="termination_msg" required>
                                            <option value="">Select Termination</option>
                                                <?php if(count($terminationMsg)>0): ?>
                                                    <?php $__currentLoopData = $terminationMsg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($item->stage_name); ?>"><?php echo e($item->stage_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                        </select>
                        
                                        <?php $__errorArgs = ['form_of_termination'];
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
                                    <label for="comments" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Court Comments')); ?></label>
                        
                                    <div class="col-md-6">
                                        <textarea id="comments" type="comments" class="form-control <?php $__errorArgs = ['comments'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="comment" value="<?php echo e(old('comments')); ?>" autocomplete="off" placeholder="Court Comments on Termination"></textarea>
                        
                                        <?php $__errorArgs = ['comments'];
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
                                            <?php echo e(__('Update Case')); ?>

                                        </button>

                                    </div>
                                    
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header"><?php echo e(__('Archived Cases List')); ?></div>
                        <div class="card-body">
                            
                            <?php if(count($archived)>0): ?>
                                <div class="table-responsive">
                                    <table class="table table-hover" id="casesTable">
                                     
                                            <tr>
                                                <th>SN</th>
                                                <th>Case ID</th>
                                                <th>Parties</th>
                                                <th>Case Subject</th>
                                                <th>Termination</th>
                                                <th>Division</th>
                                            </tr>
                                       
                                        <tbody>    
                                          
                                        <?php $__currentLoopData = $archived; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                            <tr>
                                                <td><?php echo e($loop->index + 1); ?></td>
                                                <td><a href="/case/<?php echo e($case->id); ?>"><b><?php echo e($case->case_id); ?></b></a></td> 
                                                <td><?php echo e($case->case_name); ?></td>
                                                <td><?php echo e($case->case_subject); ?></td>
                                                <td><?php echo e($case->division); ?></td>
                                                <td><?php echo e($case->current_stage); ?> </td>
                                            </tr>
                                        

                                          
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>SN</th>
                                                <th>Case ID</th>
                                                <th>Parties</th>
                                                <th>Case Subject</th>
                                                <th>Termination</th>
                                                <th>Division</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <?php else: ?>
                                  No Record Found  
                                <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</main>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/ceo/DATA/All_Git_repo/nicn_cms/resources/views/archive.blade.php ENDPATH**/ ?>