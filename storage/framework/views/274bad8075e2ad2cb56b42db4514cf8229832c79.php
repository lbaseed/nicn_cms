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
  background-color: #747A78;
  color: white;
}
#nicn_tbl td {
  height: 40px;
  text-align: center;
  
}

</style>

<div>
    
    

    <div class="head" style="margin-bottom: 15px; ">
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

    <table cellspacing='0' id="nicn_tbl">

            <tr>
                <th>Cases</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th colspan="2" style="width: 180px;">6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
            </tr>
            <tr>
                <th rowspan="2"></th>
                <th rowspan="2">CASES BROUGHT FORWARD FROM LAST QUARTER</th>
                <th rowspan="2">CASES ASSIGNED THIS QUARTER</th>
                <th rowspan="2">TOTAL OF 1 & 2</th>
                <th rowspan="2">NO. OF CONTESTED CASES AND JUDGEMENTS GIVEN</th>
                <th rowspan="2">NON-CONTESTED AND STRUCK OUT CASES</th>
                <th colspan="2">
                    DECISIONS ON INTERLOCUTORY PROCEEDINGS
                </th>
                   
                <th rowspan="2">TOTAL NO. OF CASES DISPOSED OFF DURING THE QUARTER</th>
                <th rowspan="2">CASES PENDING AT THE END OF THE QUARTER</th>
                <th rowspan="2">REMARKS</th>
            </tr>
            <tr>
                <th>CONTESTED</th>
                <th>NON CONTESTED</th>
            </tr>
           
                
            <tr>
                <td>Civil</td>
                <td><b><?php echo e($items['broughtForward']); ?> </b></td>
                <td><b><?php echo e($items['assignedCases']); ?> </b></td>
                <td><b><?php echo e($items['totalCurrentCases']); ?> </b></td>
                <td><b><?php echo e($items['judgementDelivered']); ?> </b></td>
                <td><b><?php echo e($items['struckOut'] + $items['reAssigned']); ?> </b></td>
                     
                <td> - </td>
                <td> - </td>
                        
                <td><b><?php echo e($items['totalDisposedCases']); ?> </b></td>
                <td><b><?php echo e($items['totalCurrentCases'] - $items['totalDisposedCases']); ?> </b></td>
                <td> </td>
            </tr>

            <tr>
                <td>Criminal</td>
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                     
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                        
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
            </tr>

            <tr>
                <td>Motion</td>
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                     
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                        
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
            </tr>

            <tr>
                <td>Fundamental Human Rights</td>
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                     
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                        
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
            </tr>
            <tr>
                <td><b>Total</b></td>
                <td><b><?php echo e($items['broughtForward']); ?> </b></td>
                <td><b><?php echo e($items['assignedCases']); ?> </b></td>
                <td><b><?php echo e($items['totalCurrentCases']); ?> </b></td>
                <td><b><?php echo e($items['judgementDelivered']); ?> </b></td>
                <td><b><?php echo e($items['struckOut'] + $items['reAssigned']); ?> </b></td>
                     
                <td> <b>-</b> </td>
                <td> <b>-</b> </td>
                        
                <td><b><?php echo e($items['totalDisposedCases']); ?> </b></td>
                <td><b><?php echo e($items['totalCurrentCases'] - $items['totalDisposedCases']); ?> </b></td>
                <td> <b>-</b> </td>
            </tr>
        
    </table>

    <div>* Total Number of Cases Disposed off During the Quarter, Column 7 above = Column 4 + 5.</div>
    <div>** Cases Pending at the end of the Quarter, Column 8 above = Column 3 minus column 7.</div>

    <div style="width: 100%; text-align: center; margin-top: 20px">
            <div style="float: left; width: 45%">
                <p>NAME OF JUDGE: Hon. Justice Mustapha Tijjani</p>
                <p>JUDGE</p>
                <p style="width: 50%; float: left;">Signature:........................</p> <p>Date: <?php echo e(Date("d/m/Y")); ?></p>
            </div>

            <div style="float: right; width: 45%">
                <b>CONFIRMED BY ME: PRESIDENT</b>
                <p>NAME:  Hon. Justice B. B. Kanyip  (Phd)</p>
                <p>PRESIDENT</p>
                <p style="width: 50%; float: left;">Signature:........................</p> <p>Date: <?php echo e(Date("d/m/Y")); ?></p>
            </div>
    </div>

</div><?php /**PATH C:\Users\lbase\Documents\GitHub\nicn_cms\resources\views/components/quarterly.blade.php ENDPATH**/ ?>