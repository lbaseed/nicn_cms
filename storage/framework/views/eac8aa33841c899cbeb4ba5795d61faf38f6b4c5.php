
<?php $__env->startSection('content'); ?>
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
    
                

                <div class="col-md-12 col-sm-12">
                    <div class="card">
                            <div class="card-header"><h3><?php echo e(__('Case Profile')); ?></h3>
                                
                            </div>
                            <div class="card-body p-0">
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
                                <?php if($case): ?>
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped">
                                        
                                        <tbody>    
                                       
                                            <tr>
                                                <td><b>Division</b></td> <td><?php echo e($case->division); ?></td>
                                            </tr><tr>
                                                <td><b>Case ID</b></td> <td><a href="/case/<?php echo e($case->id); ?>/edit"><b><?php echo e($case->case_id); ?></b></a></td>
                                            </tr><tr> 
                                                <td><b>Parties Involved</b></td> <td><?php echo e($case->case_name); ?></td>
                                            </tr><tr>
                                                <td><b>Case Subject Matter</b></td> <td><?php echo e($case->case_subject); ?></td>
                                            </tr><tr>
                                                <td><b>Claimant</b></td> <td><?php echo e($case->claimant); ?></td>
                                            </tr><tr>
                                                <td><b>Defendant</b></td> <td><?php echo e($case->defendant); ?></td>
                                            </tr><tr>
                                                <td><b>Filing Date</b></td> <td><?php echo e($case->filing_date); ?></td>
                                            </tr><tr>
                                                <td><b>Assignment Date</b></td> <td><?php echo e($case->assignment_date); ?></td>
                                            </tr><tr>
                                                <td><b>Current Stage</b></td> <td><?php echo e($case->current_stage); ?></td>
                                            </tr><tr>
                                                <td><b>Adjournment Date</b></td> <td><?php echo e($case->hearing_date); ?></td>
                                            </tr><tr>
                                                <td><b>Comments</b></td> <td><?php echo e($case->comments); ?></td>
                                            </tr>
                                        
                                        </tbody>
                                        
                                    </table>
                                </div>
                                
                                <?php else: ?>
                                <div class="alert alert-success">
                                    <?php echo e(__('No Record Found')); ?>

                                </div>
                                <?php endif; ?>

                            </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">    

                    <div class="card mt-3">
                            <div class="card-header"><h3><?php echo e(__('Case life Cycle Activities')); ?></h3><small>Most recent first</small></div>
                            <div class="card-body">
                                <ol class="list-group list-group-numbered">
                                    <?php $__empty_1 = true; $__currentLoopData = $caseStages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caseStage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                            <div class="font-weight-bold">[<?php echo e($caseStage->prev_stage_date); ?>]</div>
                                                Case Stage Changed from <b><?php echo e($caseStage->prev_stage); ?></b> on <b><?php echo e($caseStage->prev_stage_date); ?></b> to <b><?php echo e($caseStage->new_stage); ?></b> on <b><?php echo e($caseStage->new_stage_date); ?></b>
                                            </div>
                                            <span class="badge bg-primary rounded-pill"></span>
                                        </li>
                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div>
                                            No activities yet for this Case.
                                        </div>
                                    <?php endif; ?>
                                </ol>
                                
                            </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>   
</main>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lbase\Documents\GitHub\nicn_cms\resources\views/viewCase.blade.php ENDPATH**/ ?>