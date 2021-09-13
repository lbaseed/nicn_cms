@extends('layouts.master')
@section('content')
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-10 row">
    
                <div class="col-md-12 col-sm-12">
                    <div class="card ml-3">
                            <div class="card-header">{{ __('Add New Case') }}</div>
                            <div class="card-body">
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
                                <form method="POST" action="/case-form">
                                    @csrf
                                    {{-- division --}}
                                    <div class="form-group row">
                                        <label for="division" class="col-md-4 col-form-label text-md-right">{{ __('Division') }}</label>
                            
                                        <div class="col-md-6">
                                            <select id="division" type="text" class="form-control @error('division') is-invalid @enderror" name="division" value="{{ old('division') }}" required>
                                                <option >Select Division</option>
                                                <option value="BAU">BAU</option>
                                                <option value="GMB">GMB</option>
                                                <option value="YL">YL</option>
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
                                            <input id="case_id" type="text" class="form-control @error('case_id') is-invalid @enderror" name="case_id" value="{{ old('case_id') }}" required autocomplete="off" autofocus />
                            
                                            @error('case_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Case name --}}
                                    <div class="form-group row">
                                        <label for="case_name" class="col-md-4 col-form-label text-md-right">{{ __('Parties Involved') }}</label>
                            
                                        <div class="col-md-6">
                                            <textarea id="case_name" type="case_name" class="form-control @error('case_name') is-invalid @enderror" name="case_name" value="{{ old('case_name') }}" required autocomplete="off"></textarea>
                            
                                            @error('case_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Case Subject --}}
                                    <div class="form-group row">
                                        <label for="case_subject" class="col-md-4 col-form-label text-md-right">{{ __('Case Subject Matter') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="case_subject" type="case_subject" class="form-control @error('case_subject') is-invalid @enderror" name="case_subject" value="{{ old('case_subject') }}" required autocomplete="off">
                            
                                            @error('case_subject')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Form of Complaint --}}
                                    <div class="form-group row">
                                        <label for="complaint_form" class="col-md-4 col-form-label text-md-right">{{ __('Form of Complaint') }}</label>
                            
                                        <div class="col-md-6">
                                            <select id="complaint_form" type="text" class="form-control @error('complaint_form') is-invalid @enderror" name="complaint_form" value="{{ old('complaint_form') }}" required>
                                                <option >Select complaint form</option>
                                                @if (count($complaintForms)>0)
                                                    @foreach ($complaintForms as $item)
                                                        <option value="{{ $item->id }}">{{ $item->complaint_form }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                            
                                            @error('complaint_form')
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
                                            <input id="claimant" type="text" class="form-control @error('claimant') is-invalid @enderror" name="claimant" value="{{ old('claimant') }}" required autocomplete="off" autofocus>
                            
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
                                            <input id="defendant" type="text" class="form-control @error('defendant') is-invalid @enderror" name="defendant" value="{{ old('defendant') }}" required autocomplete="off" autofocus>
                            
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
                                            
                                                <input id="filing_date" type="text" class="form-control datepicker @error('filing_date') is-invalid @enderror datepicker" name="filing_date" value="{{ old('filing_date') }}" required autocomplete="off" placeholder="Select Date">
                                                
                                            @error('filing_date')
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
                                                {{ __('Add Case') }}
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





