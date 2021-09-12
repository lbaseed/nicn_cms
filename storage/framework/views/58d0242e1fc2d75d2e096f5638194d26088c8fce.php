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
      background-color: #19610a;
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
            <div>OF SUPERIOR COURTS OF RECORD (INDIVIDUAL JUDGES)</div>
        </div>
        <table style="width: 100%; font-size: 10px; font-weight: bold; margin-bottom: 15px;">
            <tr>
                <td style="text-align: left;">DIVISIONS: BAUCHI, GOMBE & YOLA</td>
                <td style="text-align: right;"> COURT: NATIONAL INDUSTRIAL COURT OF NIGERIA </td>
            </tr>
        </table>
        <div class="head" style="margin-bottom: 15px">
            DETAILS OF CONSIDERED JUDGMENTS DURING THE 1st QUARTER ENDED: MARCH 2021
        </div>
    
        <table cellspacing='0' id="nicn_tbl">

            <tr>
                <th>(A)</th>
                <th>(B)</th>
                <th>(C)</th>
                <th>(D)</th>
                <th>(E)</th>
                <th>(F)</th>
                <th>(G)</th>
                <th>(H)</th>
                <th>(I)</th>
                <th>(J)</th>
            </tr>
            <tr>
                <th>S/NO</th>
                <th>TYPE OF CASE</th>
                <th>CASE NUMBER</th>
                <th>DATE OF FILING</th>
                <th>DATE OF ASSIGNMENT OF CASE</th>
                <th>DATE OF COMMENCEMENT OF HEARING</th>
                <th>DATE OF JUDGEMENT</th>
                <th>DURATION ( G - F)</th>
                <th>NO. OF WITNESSES</th>
                <th>REMARKS</th>
            </tr>
           
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->index +1); ?></td>
                        <td><?php echo e($case->case_subject); ?></td>
                        <td><?php echo e($case->case_id); ?></td>
                        <td><?php echo e($case->filing_date); ?></td>
                        <td><?php echo e($case->assignment_date); ?></td>
                        <td><?php echo e($case->hearing_date); ?></td>
                        <td><?php echo e($case->adjournment_date); ?></td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        
    </table>

    <div>* Total Number of Cases Disposed off During the Quarter, Column 7 above = Column 4 + 5.</div>
    <div>** Cases Pending at the end of the Quarter, Column 8 above = Column 3 minus column 7.</div>

    <div style="width: 100%; text-align: center; margin-top: 20px">
            <div style="float: left; width: 45%">
                <p>NAME OF JUDGE: Hon. Justice Mustapha Tijjani</p>
                <p>JUDGE</p>
                <p style="width: 50%; float: left;">Signature:........................</p> <p>Date:.......................</p>
            </div>

            <div style="float: right; width: 45%">
                <b>CONFIRMED BY ME: PRESIDENT</b>
                <p>NAME:  Hon. Justice B. B. Kanyip  (Phd)</p>
                <p>PRESIDENT</p>
                <p style="width: 50%; float: left;">Signature:........................</p> <p>Date:.......................</p>
            </div>
    </div>
    <div>
        N.B.  This form is to accompany form NJC/MCPJ/3c
    </div>
</div><?php /**PATH C:\Users\lbase\Documents\GitHub\laravel_projects\nicn_cms\resources\views/components/judgment.blade.php ENDPATH**/ ?>