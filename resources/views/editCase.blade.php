@extends('layouts.master')
@section('content')
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
    
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">{{ __('Update Case Information') }}</div>
                            <div class="card-body">
                                
                                <form method="POST" action="/case/{{ $case->id }}/edit">
                                    @csrf
                                    @method('PUT')
                                    {{-- {{ Auth::user()->file_number }} --}}
                                    {{-- division --}}
                                    <div class="form-group row">
                                        <label for="division" class="col-md-4 col-form-label text-md-right">{{ __('Division') }}</label>
                            
                                        <div class="col-md-6">
                                            <select id="division" type="text" class="form-control @error('division') is-invalid @enderror" name="division" disabled value="{{ $case->division }}" required>
                                                <option value="{{ $case->division }}">{{ $case->division }}</option>
                                                <option value="BAU">BAU</option>
                                                <option value="GMB">GMB</option>
                                                <option value="YLA">YLA</option>
                                            </select>
                            
                                            @error('division')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Case ID --}}
                                    <div class="form-group row">
                                        <label for="case_id" class="col-md-4 col-form-label text-md-right">{{ __('Case ID') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="case_id" type="text" class="form-control @error('case_id') is-invalid @enderror" name="case_id" disabled value="{{ $case->case_id }}" required autocomplete="off" autofocus />
                            
                                            @error('case_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Case name  --parties involved --}}
                                    <div class="form-group row">
                                        <label for="case_name" class="col-md-4 col-form-label text-md-right">{{ __('Parties Involved') }}</label>
                            
                                        <div class="col-md-6">
                                            <textarea id="case_name" type="case_name" class="form-control @error('case_name') is-invalid @enderror" disabled name="case_name" value="{{ $case->case_name }}" required autocomplete="off">{{ $case->case_name }}</textarea>
                            
                                            @error('case_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Case Subject --}}
                                    <div class="form-group row">
                                        <label for="case_subject" class="col-md-4 col-form-label text-md-right">{{ __('Case Subject') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="case_subject" type="case_subject" class="form-control @error('case_subject') is-invalid @enderror" name="case_subject" disabled value="{{ $case->case_subject }}" required autocomplete="off">
                            
                                            @error('case_subject')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Claimant --}}
                                    <div class="form-group row">
                                        <label for="claimant" class="col-md-4 col-form-label text-md-right">{{ __('Claimant') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="claimant" type="text" class="form-control @error('claimant') is-invalid @enderror" name="claimant" disabled value="{{ $case->claimant }}" required autocomplete="off">
                            
                                            @error('claimant')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Defendant --}}
                                    <div class="form-group row">
                                        <label for="defendant" class="col-md-4 col-form-label text-md-right">{{ __('Defendant') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="defendant" type="text" class="form-control @error('defendant') is-invalid @enderror" name="defendant" disabled value="{{ $case->defendant }}" required autocomplete="off" >
                            
                                            @error('defendant')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- filing date --}}
                                    <div class="form-group row">
                                        <label for="filing_date" class="col-md-4 col-form-label text-md-right">{{ __('Case Filing Date') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="filing_date" type="text" class="form-control @error('filing_date') is-invalid @enderror" name="filing_date" disabled value="{{ $case->filing_date }}" required autocomplete="off">
                            
                                            @error('filing_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Assignment date --}}
                                    <div class="form-group row">
                                        <label for="assignment_date" class="col-md-4 col-form-label text-md-right">{{ __('Case Assignment Date') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="assignment_date" type="text" class="form-control datepicker @error('assignment_date') is-invalid @enderror" name="assignment_date" value="{{ $case->assignment_date }}" {{ $case->assignment_date!=null ? 'disabled':'required' }}  autocomplete="off">
                            
                                            @error('assignment_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- COmmenecement date --}}
                                    <div class="form-group row">
                                        <label for="hearing_date" class="col-md-4 col-form-label text-md-right">{{ __('Case Commencement Date') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="hearing_date" type="text" class="form-control datepicker @error('hearing_date') is-invalid @enderror" name="hearing_date"  value="{{ $case->hearing_date }}" {{ $case->assignment_date!=null ? 'disabled':'' }} autocomplete="off">
                            
                                            @error('hearing_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Adjournment stage --}}
                                    <div class="form-group row">
                                        <label for="adjournment" class="col-md-4 col-form-label text-md-right">{{ __('Case Stage') }}</label>
                            
                                        <div class="col-md-6">
                                            
                                            <select id="adjournment" type="text" class="form-control @error('adjournment') is-invalid @enderror" name="current_stage" value="{{ old('adjournment') }}" required>
                                                <option >Select New Case Stage</option>
                                                @if (count($stageTypes)>0)
                                                    @foreach ($stageTypes as $item)
                                                        <option value="{{ $item->stage_name }}">{{ $item->stage_name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @error('adjournment')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Adjournment date --}}
                                    <div class="form-group row">
                                        <label for="adjournment_date" class="col-md-4 col-form-label text-md-right">{{ __('Case Adjournment Date') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="adjournment_date" type="text" class="form-control datepicker @error('adjournment_date') is-invalid @enderror" name="adjournment_date"  value="" placeholder="{{ $case->adjournment_date }}" required autocomplete="off">
                            
                                            @error('adjournment_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Adjournment comment --}}
                                    <div class="form-group row">
                                        <label for="comments" class="col-md-4 col-form-label text-md-right">{{ __('Adjournment Comments') }}</label>
                            
                                        <div class="col-md-6">
                                            <textarea id="comments" type="comments" class="form-control @error('comments') is-invalid @enderror" name="comment" required autocomplete="off" placeholder="{{ $case->comment }}"></textarea>
                            
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
        </div>
    </div>   
</main>
@endsection





