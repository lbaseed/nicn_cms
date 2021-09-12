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
            <div>QUARTERLY RETURN OF CASES FOR THE QUARTER ENDED: MARCH 2021</div>
        </div>
        <table style="width: 100%; font-size: 10px; font-weight: bold; margin-bottom: 15px;">
            <tr>
                <td style="text-align: left;">DIVISIONS: BAUCHI, GOMBE & YOLA</td>
                <td style="text-align: right;"> COURT: NATIONAL INDUSTRIAL COURT OF NIGERIA </td>
            </tr>
        </table>

        <div class="head">
            RELATIVE AGES OF PENDING CASES <br>
            AS AT BEGINNING OF 1ST JANUARY  - 31ST MARCH,  2021,  1ST  QUARTER 2021
        </div>
    
        <table cellspacing='0' id="nicn_tbl">
    
            <tr>
                <th> </th>
                <th>(A)</th>
                <th>(B)</th>
                <th>(C)</th>
                <th>(D)</th>
                <th>(E)</th>
                <th colspan="3">(F)</th>
                <th style="width: 17%;">(G)</th>
            </tr>
            <tr>
                <th rowspan=2>S/NO</th>
                <th rowspan=2>TYPE OF CASE</th>
                <th rowspan=2 style="width: 14%">CASE NUMBER</th>
                <th rowspan=2>DATE OF FILING</th>
                <th rowspan=2>DATE OF ASSIGNMENT OF CASE</th>
                <th rowspan=2>DATE OF COMMENCEMENT OF HEARING</th>

                <th colspan="3" style="width: 20%">AGE OF CASE ( PRESENT DATE - E)</th>

                <th rowspan=2>REMARKS<br> (STAGES/STATUS OF CASE)</th>
            </tr>
            <tr>
                        <th> < 2yrs</th>
                        <th> 2Yrs - 5Yrs</th>
                        <th> >5Yrs </th>
            </tr>
            
           
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->index +1); ?></td>
                        <td><?php echo e($case->case_subject); ?></td>
                        <td><?php echo e($case->case_id); ?></td>
                        <td><?php echo e($case->filing_date); ?></td>
                        <td><?php echo e($case->assignment_date); ?></td>
                        <td><?php echo e($case->hearing_date); ?></td>
                        <td>a </td>
                        <td>b </td>
                        <td>c </td>
                        <td><?php echo e($case->current_stage); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>
    
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

</div><?php /**PATH C:\Users\lbase\Documents\GitHub\laravel_projects\nicn_cms\resources\views/components/ages.blade.php ENDPATH**/ ?>