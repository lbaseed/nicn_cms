@extends('layouts.master')
@section('content')
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">{{ __('Archive Case') }}</div>
                        <div class="card-body">
                            
                            <form method="POST" action="/archive-case">
                                @csrf
                                
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                {{-- Select Case --}}
                                <div class="form-group row">
                                    <label for="case_id" class="col-md-4 col-form-label text-md-right">{{ __('Case ID') }}</label>
                        
                                    <div class="col-md-6">
                                        <select id="case_id" type="text" class="form-control @error('case_id') is-invalid @enderror" name="case_id" required>
                                            <option value="">Select Case ID</option>
                                                @if (count($cases)>0)
                                                    @foreach ($cases as $case)
                                                        <option value="{{ $case->id }}">{{ $case->case_id }} [ {{ $case->case_name }}]</option>
                                                    @endforeach
                                                @endif
                                        </select>
                        
                                        @error('case_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                
                                {{-- Termination date --}}
                                <div class="form-group row">
                                    <label for="termination_date" class="col-md-4 col-form-label text-md-right">{{ __('Case Termination Date') }}</label>
                        
                                    <div class="col-md-6">
                                        <input id="termination_date" type="text" class="form-control datepicker @error('termination_date') is-invalid @enderror" name="termination_date" required autocomplete="off">
                        
                                        @error('termination_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Form of Termination --}}
                                <div class="form-group row">
                                    <label for="form_of_termination" class="col-md-4 col-form-label text-md-right">{{ __('Termination Form') }}</label>
                        
                                    <div class="col-md-6">
                                        <select id="form_of_termination" type="text" class="form-control @error('form_of_termination') is-invalid @enderror" name="termination_msg" required>
                                            <option value="">Select Termination</option>
                                                @if (count($terminationMsg)>0)
                                                    @foreach ($terminationMsg as $item)
                                                        <option value="{{ $item->stage_name }}">{{ $item->stage_name }}</option>
                                                    @endforeach
                                                @endif
                                        </select>
                        
                                        @error('form_of_termination')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Court comment --}}
                                <div class="form-group row">
                                    <label for="comments" class="col-md-4 col-form-label text-md-right">{{ __('Court Comments') }}</label>
                        
                                    <div class="col-md-6">
                                        <textarea id="comments" type="comments" class="form-control @error('comments') is-invalid @enderror" name="comment" value="{{ old('comments') }}" autocomplete="off" placeholder="Court Comments on Termination"></textarea>
                        
                                        @error('comments')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- submit form --}}
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-outline-primary">
                                            {{ __('Update Case') }}
                                        </button>

                                    </div>
                                    
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Archived Cases List --}}
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">{{ __('Archived Cases List') }}</div>
                        <div class="card-body">
                            
                            @if (count($archived)>0)
                                <div class="table-responsive">
                                    <table class="table table-hover" id="casesTable">
                                     
                                            <tr>
                                                <th>SN</th>
                                                <th>Case ID</th>
                                                <th>Parties</th>
                                                <th>Case Subject</th>
                                                <th>Termination</th>
                                                <th>Division</th>
                                            </tr>
                                       
                                        <tbody>    
                                          
                                        @foreach ($archived as $case)
                                        
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td><a href="/case/{{ $case->id }}"><b>{{ $case->case_id }}</b></a></td> 
                                                <td>{{ $case->case_name }}</td>
                                                <td>{{ $case->case_subject }}</td>
                                                <td>{{ $case->division }}</td>
                                                <td>{{ $case->current_stage }} </td>
                                            </tr>
                                        

                                          
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>SN</th>
                                                <th>Case ID</th>
                                                <th>Parties</th>
                                                <th>Case Subject</th>
                                                <th>Termination</th>
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
</main>
@endsection





