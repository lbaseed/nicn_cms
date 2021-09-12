
<?php $__env->startSection('content'); ?>
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
    
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header"><?php echo e(__('Monthly Return of Cases')); ?></div>
                                <div class="card-body">
                                <div class="col-md-6 mb-3">
                                    <form id="month" action="/cases" method="POST">
                                        <?php echo csrf_field(); ?>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <select id="division" type="text" class="form-control" name="division">
                                                    <option value="">Select Month</option>
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-outline-primary">
                                            <?php echo e(__('Generate Return')); ?>

                                        </button>
                                      </form>
                                    
                                </div>
                              
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header"><?php echo e(__('Quarterly Return off Cases')); ?> </div>
                                <div class="card-body">
                                <div class="col-md-6 mb-3">
                                    <form id="quarter" action="/cases" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <select id="division" type="text" class="form-control" name="division">
                                                    <option value="">Select Quater</option>
                                                    <option value="1">1st Quarter</option>
                                                    <option value="4">2nd Quarter</option>
                                                    <option value="7">3rd Quarter</option>
                                                    <option value="10">4th Quarter</option>
                                                </select>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-outline-primary">
                                            <?php echo e(__('Generate 1/4 Return')); ?>

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






<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lbase\Documents\GitHub\laravel_projects\nicn_cms\resources\views/casesReturn.blade.php ENDPATH**/ ?>