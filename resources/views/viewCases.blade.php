@extends('layouts.master')
@section('content')
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
    
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">{{ __('View All Cases') }} [{{ $division }} Div]</div>
                            <div class="card-body">
                                <div class="col-md-6 mb-3">
                                    <form id="division-cases" action="/cases" method="POST">
                                        @csrf
                                        <select id="division" type="text" class="form-control" name="division">
                                            <option value="">Select Division</option>
                                            <option value="ALL">All Divisions</option>
                                            <option value="BAU">BAU</option>
                                            <option value="GMB">GMB</option>
                                            <option value="YL">YL</option>
                                        </select>
                                      </form>
                                    
                                </div>
                                @if (count($cases)>0)
                                <div class="table-responsive">
                                    <table class="table table-hover" id="casesTable">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Case ID</th>
                                                <th>Parties</th>
                                                <th>Case Subject</th>
                                                <th>Division</th>
                                            </tr>
                                        </thead>
                                        <tbody>    
                                          
                                        @foreach ($cases as $case)
                                        
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td><a href="/case/{{ $case->id }}"><b>{{ $case->case_id }}</b></a></td> 
                                                <td>{{ $case->case_name }}</td>
                                                <td>{{ $case->case_subject }}</td>
                                                <td>{{ $case->division }}</td>
                                            </tr>
                                        

                                          
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>SN</th>
                                                <th>Case ID</th>
                                                <th>Parties</th>
                                                <th>Case Subject</th>
                                                <th>Division</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                @else
                                  No Record Found  
                                @endif
                               
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
      
</main>
@endsection





