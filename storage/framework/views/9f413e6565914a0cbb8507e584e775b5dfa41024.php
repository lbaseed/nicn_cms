<?php $__env->startSection('content'); ?>
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
    
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header"><?php echo e(__('Update Case Information')); ?></div>
                            <div class="card-body">
                                
                                <form method="POST" action="/case/<?php echo e($case->id); ?>/edit">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    
                                    <?php
                                        $clrs = Illuminate\Support\Facades\Auth::user()->clrs;
                                    ?>
                                    
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
unset($__errorArgs, $__bag); ?>" name="division" <?php echo e($clrs == 5 ? '':'disabled'); ?> value="<?php echo e($case->division); ?>" required>
                                                <option value="<?php echo e($case->division); ?>"><?php echo e($case->division); ?></option>
                                                <option value="BAU">Bauchi</option>
                                                <option value="GMB">Gombe</option>
                                                <option value="YLA">Yola</option>
                                                <option value="LA">Lagos</option>
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
unset($__errorArgs, $__bag); ?>" name="case_id" <?php echo e($clrs == 5 ? '':'disabled'); ?> value="<?php echo e($case->case_id); ?>" required autocomplete="off" autofocus />
                            
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
unset($__errorArgs, $__bag); ?>" <?php echo e($clrs == 5 ? '':'disabled'); ?> name="case_name" value="<?php echo e($case->case_name); ?>" required autocomplete="off"><?php echo e($case->case_name); ?></textarea>
                            
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
                                        <label for="case_subject" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Case Subject')); ?></label>
                            
                                        <div class="col-md-6">
                                            <input id="case_subject" type="case_subject" class="form-control <?php $__errorArgs = ['case_subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="case_subject" <?php echo e($clrs == 5 ? '':'disabled'); ?> value="<?php echo e($case->case_subject); ?>" required autocomplete="off">
                            
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
unset($__errorArgs, $__bag); ?>" name="claimant" <?php echo e($clrs == 5 ? '':'disabled'); ?> value="<?php echo e($case->claimant); ?>" required autocomplete="off">
                            
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
unset($__errorArgs, $__bag); ?>" name="defendant" <?php echo e($clrs == 5 ? '':'disabled'); ?> value="<?php echo e($case->defendant); ?>" required autocomplete="off" >
                            
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
unset($__errorArgs, $__bag); ?>" name="filing_date" <?php echo e($clrs == 5 ? '':'disabled'); ?> value="<?php echo e($case->filing_date); ?>" required autocomplete="off">
                            
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
                                    
                                    <div class="form-group row">
                                        <label for="assignment_date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Case Assignment Date')); ?></label>
                            
                                        <div class="col-md-6">
                                            <input id="assignment_date" type="text" class="form-control datepicker <?php $__errorArgs = ['assignment_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="assignment_date" <?php echo e($clrs == 5 ? '':'disabled'); ?> value="<?php echo e($case->assignment_date); ?>" <?php echo e($case->assignment_date==null or $clrs == 5 ? '':'disabled'); ?>  autocomplete="off">
                            
                                            <?php $__errorArgs = ['assignment_date'];
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
                                        <label for="hearing_date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Case Commencement Date')); ?></label>
                            
                                        <div class="col-md-6">
                                            <input id="hearing_date" type="text" class="form-control datepicker <?php $__errorArgs = ['hearing_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="hearing_date"  value="<?php echo e($case->hearing_date); ?>" <?php echo e($case->assignment_date==null || $clrs == 5 ? '':'disabled'); ?> autocomplete="off">
                            
                                            <?php $__errorArgs = ['hearing_date'];
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
                                        <label for="adjournment" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Case Stage')); ?></label>
                            
                                        <div class="col-md-6">
                                            
                                            <select id="adjournment" type="text" class="form-control <?php $__errorArgs = ['adjournment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="current_stage" value="<?php echo e(old('adjournment')); ?>">
                                                <option value="">Select New Case Stage</option>
                                                <option value="other">Other</option>
                                                <?php if(count($stageTypes)>0): ?>
                                                    <?php $__currentLoopData = $stageTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($item->stage_name); ?>"><?php echo e($item->stage_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </select>
                                            <?php $__errorArgs = ['adjournment'];
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
                                    <div class="form-group row" id="other">
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="adjournment_date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Case Adjournment Date')); ?></label>
                            
                                        <div class="col-md-6">
                                            <input id="adjournment_date" type="text" class="form-control datepicker <?php $__errorArgs = ['adjournment_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="adjournment_date"  value="" placeholder="<?php echo e($case->adjournment_date); ?>" autocomplete="off">
                            
                                            <?php $__errorArgs = ['adjournment_date'];
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
                                        <label for="comments" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Adjournment Comments')); ?></label>
                            
                                        <div class="col-md-6">
                                            <textarea id="comments" type="comments" class="form-control <?php $__errorArgs = ['comments'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="comment" autocomplete="off" placeholder="<?php echo e($case->comment); ?>"></textarea>
                            
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
        </div>
    </div>   
</main>

    <?php $__env->startSection('scripts'); ?>
        <script>
            $(document).ready(function(){
                $("#adjournment").change(function(){
                    var text = $("#adjournment").val();
                    
                    if(text == "other"){
                        $("#other").html("<label class='col-md-4 col-form-label text-md-right'>Other Stage</label><div class='col-md-6' id='other_append'><input type='text' class='form-control' name='current_stage' /></div>");
                        $("#adjournment").removeAttr('name');
                    }else{
                        $("#other").html("");
                        $("#adjournment").attr('name','current_stage');

                    }
                })
                
            })
        </script>

    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/ceo/DATA/All_Git_repo/nicn_cms/resources/views/editCase.blade.php ENDPATH**/ ?>