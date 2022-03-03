<?php $__env->startSection('content'); ?>
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
    
                

                <div class="col-md-12 col-sm-12">
                    <div class="card">
                            <div class="card-header"><h3><?php echo e(__('User Profile')); ?></h3>
                                
                            </div>
                            <div class="card-body p-0">
                                   
                                <?php if($user): ?>
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped">
                                        
                                        <tbody>    
                                       
                                            <tr>
                                                <td><b>File Number</b></td> <td><a href="/system-user/<?php echo e($user->id); ?>/edit"><b><?php echo e($user->file_number); ?></b></a></td>
                                            </tr><tr>
                                                <td><b>Full Name</b></td> <td><?php echo e($user->name); ?></td>
                                            </tr><tr> 
                                                <td><b>Email</b></td> <td><?php echo e($user->email); ?></td>
                                            </tr><tr>
                                                <td><b>Phone Number</b></td> <td><?php echo e($user->phone); ?></td>
                                            </tr><tr>
                                                <td><b>Clearance Level</b></td> <td><?php echo e($user->clrs == 5 ? "Admin":"User"); ?></td>
                                            </tr>
                                        
                                        </tbody>
                                        
                                    </table>
                                </div>
                                
                                <?php else: ?>
                                <div class="alert alert-info">
                                    <?php echo e(__('No Record Found')); ?>

                                </div>
                                <?php endif; ?>

                            </div>
                    </div>
                </div>

               
            </div>
        </div>
    </div>   
</main>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/ceo/DATA/All_Git_repo/nicn_cms/resources/views/profile.blade.php ENDPATH**/ ?>