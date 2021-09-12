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
                                @method('PUT')
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
                                    <label for="filing_date" class="col-md-4 col-form-label text-md-right">{{ __('Case Termination Date') }}</label>
                        
                                    <div class="col-md-6">
                                        <input id="filing_date" type="text" class="form-control @error('filing_date') is-invalid @enderror" name="filing_date" required autocomplete="off">
                        
                                        @error('filing_date')
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
                                        <select id="form_of_termination" type="text" class="form-control @error('form_of_termination') is-invalid @enderror" name="form_of_termination" required>
                                            <option value="">Select Termination</option>
                                            <option value="">Judgement Delivered</option>
                                            <option value="">Struck Out</option>
                                            <option value="">Dismissed</option>
                                            <option value="">Settlement</option>
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
                                        <textarea id="comments" type="comments" class="form-control @error('comments') is-invalid @enderror" name="comments" value="{{ old('comments') }}" autocomplete="off" placeholder="for hearing comments"></textarea>
                        
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
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</main>
@endsection





