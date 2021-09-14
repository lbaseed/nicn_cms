
<?php $__env->startSection('content'); ?>
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
    
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header"><?php echo e(__('Search among All Cases')); ?></div>
                            <div class="card-body">
                                <?php if(count($cases)>0): ?>
                                    <ol class="list-group list-group-numbered">
                                        <?php $__currentLoopData = $cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href='/case/<?php echo e($case->id); ?>'>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                <div class="font-weight-bolder"><?php echo e($case->case_id); ?></div>
                                                    <?php echo e($case->case_name); ?>

                                                </div>
                                                <span class="badge bg-primary rounded-pill text-lighter"><?php echo e($case->current_stage); ?></span>
                                            </li>
                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ol>
                                <?php else: ?>
                                  No Record matching this search  
                                <?php endif; ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
      
</main>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lbase\Documents\GitHub\nicn_cms\resources\views/searchCases.blade.php ENDPATH**/ ?>