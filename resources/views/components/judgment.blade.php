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
            DETAILS OF CONSIDERED JUDGMENTS DURING THE QUARTER: {{ $period }}
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
                <th style="width: 13%">CASE NUMBER</th>
                <th>DATE OF FILING</th>
                <th>DATE OF ASSIGNMENT OF CASE</th>
                <th style="width: 13%">DATE OF COMMENCEMENT OF HEARING</th>
                <th>DATE OF JUDGEMENT</th>
                <th>DURATION ( G - F)</th>
                <th>NO. OF WITNESSES</th>
                <th>REMARKS</th>
            </tr>
           @if (count($disposed)>0)
                {{-- loop through array of disposed cases [judgement, struckout, dismissed and struck out] --}}

                    {{ $sn = 1 }}

                        @if(count($disposed["judgements"]) > 0)
                            @foreach ($disposed["judgements"] as $case)
                            <tr>
                                <td>{{ $sn }}</td>
                                <td>Employment</td>
                                <td>{{ $case->case_id }}</td>
                                <td>{{ $case->filing_date }}</td>
                                <td>{{ $case->assignment_date }}</td>
                                <td>{{ $case->hearing_date }}</td>
                                <td>{{ $case->termination_date }}</td>
                                <td> 
                                    @php
                                        $hearingDate = Carbon\Carbon::parse($case->hearing_date); 
                                        $terminationDate = Carbon\Carbon::parse($case->termination_date);  
                                        $diff = $hearingDate->diffInDays($terminationDate);
                                        $yr = ($diff-($diff%365))/365;
                                        $mnth = ( ($diff%365) - ( ($diff%365) % 30) ) / 30;
                                        $day = ( ($diff%365) % 30);
                                    @endphp
                                    {{ $yr > 1 ? $yr.' Years' : $yr.' Year' }}
                                    {{ $mnth > 1 ? $mnth.' Months' : $mnth.' Month' }}
                                    {{ $day > 1 ? $day.' Days' : $day.' Day'}}
                                </td>
                                <td> </td>
                                <td> {{ $case->current_stage }}</td>
                            </tr>
                            {{ $sn++ }}
                            @endforeach

                        @endif
                {{-- Struck Out Cases --}}
                        @if(count($disposed["struckOut"]) > 0)
                            @foreach ($disposed["struckOut"] as $case)
                            <tr>
                                <td>{{ $sn}}</td>
                                <td>Employment</td>
                                <td>{{ $case->case_id }}</td>
                                <td>{{ $case->filing_date }}</td>
                                <td>{{ $case->assignment_date }}</td>
                                <td>{{ $case->hearing_date }}</td>
                                <td>{{ $case->termination_date }}</td>
                                <td> 
                                    @php
                                        $hearingDate = Carbon\Carbon::parse($case->hearing_date); 
                                        $terminationDate = Carbon\Carbon::parse($case->termination_date);  
                                        $diff = $hearingDate->diffInDays($terminationDate);
                                        $yr = ($diff-($diff%365))/365;
                                        $mnth = ( ($diff%365) - ( ($diff%365) % 30) ) / 30;
                                        $day = ( ($diff%365) % 30);
                                    @endphp
                                    {{ $yr > 1 ? $yr.' Years' : $yr.' Year' }}
                                    {{ $mnth > 1 ? $mnth.' Months' : $mnth.' Month' }}
                                    {{ $day > 1 ? $day.' Days' : $day.' Day'}}
                                </td>
                                <td> </td>
                                <td> {{ $case->current_stage }}</td>
                            </tr>
                            {{ $sn++ }}
                            @endforeach

                        @endif
                {{-- Dismissed Cases --}}
                        @if(count($disposed["dismissed"]) > 0)
                            @foreach ($disposed["dismissed"] as $case)
                            <tr>
                                <td>{{ $sn}}</td>
                                <td>Employment</td>
                                <td>{{ $case->case_id }}</td>
                                <td>{{ $case->filing_date }}</td>
                                <td>{{ $case->assignment_date }}</td>
                                <td>{{ $case->hearing_date }}</td>
                                <td>{{ $case->termination_date }}</td>
                                <td> 
                                    @php
                                        $hearingDate = Carbon\Carbon::parse($case->hearing_date); 
                                        $terminationDate = Carbon\Carbon::parse($case->termination_date);  
                                        $diff = $hearingDate->diffInDays($terminationDate);
                                        $yr = ($diff-($diff%365))/365;
                                        $mnth = ( ($diff%365) - ( ($diff%365) % 30) ) / 30;
                                        $day = ( ($diff%365) % 30);
                                    @endphp
                                    {{ $yr > 1 ? $yr.' Years' : $yr.' Year' }}
                                    {{ $mnth > 1 ? $mnth.' Months' : $mnth.' Month' }}
                                    {{ $day > 1 ? $day.' Days' : $day.' Day'}}
                                </td>
                                <td> </td>
                                <td> {{ $case->current_stage }}</td>
                            </tr>

                            {{ $sn++ }}
                            @endforeach

                        @endif
                {{-- reassigned Cases --}}
                        @if(count($disposed["reassigned"]) > 0)
                            @foreach ($disposed["reassigned"] as $case)
                            <tr>
                                <td>{{ $sn }}</td>
                                <td>Employment</td>
                                <td>{{ $case->case_id }}</td>
                                <td>{{ $case->filing_date }}</td>
                                <td>{{ $case->assignment_date }}</td>
                                <td>{{ $case->hearing_date }}</td>
                                <td>{{ $case->termination_date }}</td>
                                <td> 
                                    @php
                                        $hearingDate = Carbon\Carbon::parse($case->hearing_date); 
                                        $terminationDate = Carbon\Carbon::parse($case->termination_date);  
                                        $diff = $hearingDate->diffInDays($terminationDate);
                                        $yr = ($diff-($diff%365))/365;
                                        $mnth = ( ($diff%365) - ( ($diff%365) % 30) ) / 30;
                                        $day = ( ($diff%365) % 30);
                                    @endphp
                                    {{ $yr > 1 ? $yr.' Years' : $yr.' Year' }}
                                    {{ $mnth > 1 ? $mnth.' Months' : $mnth.' Month' }}
                                    {{ $day > 1 ? $day.' Days' : $day.' Day'}}
                                </td>
                                <td> </td>
                                <td> {{ $case->current_stage }}</td>
                            </tr>

                            {{ $sn++ }}
                            @endforeach

                        @endif
                
            @else
                    <tr>
                        <td colspan="10">No disposed this quarter</td>
                    </tr>
           @endif

        
    </table>

    @php
        $items = count($disposed["judgements"]) + count($disposed["struckOut"]) + count($disposed["dismissed"]) + count($disposed["reassigned"]);
    @endphp

    <div style="page-break-inside:avoid !important; margin-top: {{ $items <= 7 ? '10px':'150px' }}">
        
        <div style="width: 100%; text-align: center; margin-top: 20px">
                <div style="float: left; width: 45%">
                    <p>NAME OF JUDGE: Hon. Justice Mustapha Tijjani</p>
                    <p>JUDGE</p>
                    <p style="width: 50%; float: left;">Signature:........................</p> <p>Date: {{ Date("d/m/Y") }}</p>
                </div>

                <div style="float: right; width: 45%">
                    <b>CONFIRMED BY ME: PRESIDENT</b>
                    <p>NAME:  Hon. Justice B. B. Kanyip  (Phd)</p>
                    <p>PRESIDENT</p>
                    <p style="width: 50%; float: left;">Signature:........................</p> <p>Date: ........................</p>
                </div>
        </div>
        <div>
            N.B.  This form is to accompany form NJC/MCPJ/3c
        </div>
    </div>
</div>