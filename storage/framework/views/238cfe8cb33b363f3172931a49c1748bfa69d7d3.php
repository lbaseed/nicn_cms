<style>
    .head {
        text-align: center;
        font-size: 12px;
        font-weight: bold;
    
        
    }
    
    #nicn_tbl {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 10px;
      margin-top: 15px
    }
    
    #nicn_tbl td, #nicn_tbl th {
      border: 0.5px solid #000;
      padding: 0px;
      text-align: center;
    }
    
    #nicn_tbl tr:nth-child(even){background-color: #f2f2f2;}
    
    #nicn_tbl th {
      padding-top: 12px;
      padding-bottom: 0px;
      text-align: center;
      background-color: #747A78;
      color: white;
    }
    #nicn_tbl td {
      height: 40px;
      text-align: center;
      
    }
    
</style>

    <div>
    
        <div class="head" style="margin-bottom: 15px">
            <div style="font-size: 16px;">NATIONAL JUDICIAL COUNCIL</div>
            <div>MONITORING COMMITTEE ON THE PERFORMANCE OF JUDICIAL OFFICERS</div>
            <div>OF SUPERIOR COURTS OF RECORD</div>
            <div>QUARTERLY RETURN OF CASES FOR THE QUARTER: <?php echo e($period); ?></div>
        </div>
        <table style="width: 100%; font-size: 10px; font-weight: bold; margin-bottom: 15px;">
            <tr>
                <td style="text-align: left;">DIVISIONS: BAUCHI, GOMBE & YOLA</td>
                <td style="text-align: right;"> COURT: NATIONAL INDUSTRIAL COURT OF NIGERIA </td>
            </tr>
        </table>

        <div class="head">
            RELATIVE AGES OF PENDING CASES <br>
            AS AT <?php echo e($period); ?>

        </div>
    
        <table cellspacing='0' id="nicn_tbl">
    
            <tr>
                <th> </th>
                <th>(A)</th>
                <th>(B)</th>
                <th>(C)</th>
                <th>(D)</th>
                <th>(E)</th>
                <th>(F)</th>
                <th style="width: 17%;">(G)</th>
            </tr>
            <tr>
                <th>S/NO</th>
                <th>TYPE OF CASE</th>
                <th style="width: 14%">CASE NUMBER</th>
                <th>DATE OF FILING</th>
                <th>DATE OF ASSIGNMENT OF CASE</th>
                <th>DATE OF COMMENCEMENT OF HEARING</th>

                <th style="width: 20%">AGE OF CASE ( PRESENT DATE - E)</th>

                <th>REMARKS<br> (STAGES/STATUS OF CASE)</th>
            </tr>
            
            
           
                <?php if(count($items)>0): ?>

                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->index +1); ?></td>
                            <td><?php echo e(_('Employment')); ?></td>
                            <td><?php echo e($case->case_id); ?></td>
                            <td><?php echo e($case->filing_date); ?></td>
                            <td><?php echo e($case->assignment_date); ?></td>
                            <td><?php echo e($case->hearing_date); ?></td>
                            <td>
                            <?php
                                $hearingDate = Carbon\Carbon::parse($case->hearing_date); 
                                $terminationDate = Carbon\Carbon::parse($case->termination_date);  
                                $diff = $hearingDate->diffInDays($terminationDate);
                                $yr = ($diff-($diff%365))/365;
                                $mnth = ( ($diff%365) - ( ($diff%365) % 30) ) / 30;
                                $day = ( ($diff%365) % 30);
                                
                                
                            ?>
                            <?php echo e($yr > 1 ? $yr.' Years' : $yr.' Year'); ?>

                            <?php echo e($mnth > 1 ? $mnth.' Months' : $mnth.' Month'); ?>

                            <?php echo e($day > 1 ? $day.' Days' : $day.' Day'); ?>    
                            </td>
                            
                            <td><?php echo e($case->current_stage); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                <?php else: ?>
                    No Record Found.
                <?php endif; ?>

        </table>
    
        <div style="width: 100%; text-align: center; margin-top: <?php echo e(count($items) <= 7 ? '10px':'150px'); ?>">
            <div style="float: left; width: 45%">
                <p>NAME OF JUDGE: Hon. Justice Mustapha Tijjani</p>
                <p>JUDGE</p>
                <p style="width: 50%; float: left;">Signature:........................</p> <p>Date: <?php echo e(Date("d/m/Y")); ?></p>
            </div>

            <div style="float: right; width: 45%">
                <b>CONFIRMED BY ME: PRESIDENT</b>
                <p>NAME:  Hon. Justice B. B. Kanyip  (Phd)</p>
                <p>PRESIDENT</p>
                <p style="width: 50%; float: left;">Signature:........................</p> <p>Date: .........................</p>
            </div>
        </div>

</div><?php /**PATH /media/ceo/DATA/All_Git_repo/nicn_cms/resources/views/components/ages.blade.php ENDPATH**/ ?>