@extends('layouts.master')
@section('content')
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">

                <div class="col-lg-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">{{ __('Case Stage Settings') }} </div>
                                <div class="card-body">
                                <div class="col-lg-12 mb-3">
                                    @if(session('stageSuccess'))
                                    <div class="alert alert-success">
                                    {{ session('stageSuccess') }}
                                    </div>
                                    @endif
                                    @if(session('stageError'))
                                    <div class="alert alert-danger">
                                    {{ session('stageError') }}
                                    </div>
                                    @endif
                                    <form id="case-stage" action="/create-stage" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-lg-12 mb-3">
                                                <label for="case-stage" class="col-form-label text-md-right">{{ __('Case Stage') }}</label>

                                                <input id="case-stage" type="text" class="form-control @error('case-stage') is-invalid @enderror" name="stage_name" value="{{ old('case-stage') }}" required autocomplete="off" autofocus>
                            
                                                @error('case-stage')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="col-form-label text-md-right">{{ __('Type of Stage') }}</label>
                                                <br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input @error('stage_type') is-invalid @enderror" type="radio" name="stage_type" id="inlineRadio1" value="lcs" checked>
                                                    <label class="form-check-label" for="inlineRadio1">Life Cycle Stage</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input @error('stage_type') is-invalid @enderror" type="radio" name="stage_type" id="inlineRadio2" value="ts">
                                                    <label class="form-check-label" for="inlineRadio2">Terminationg Stage</label>
                                                </div>
                                                </div>
                                                @error('stage_type')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                        <button type="submit" onclick="event.preventDefault();
                                        document.getElementById('case-stage').submit();"  class="btn btn-outline-primary">
                                            {{ __('Create Stage Type') }}
                                      </button>
                                      </form>
                                      
                                </div>
                                
                               
                            </div>
                        
                    </div>
                </div>
                
                <div class="col-lg-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">{{ __('Form of Complaint') }} </div>
                                <div class="card-body">
                                <div class="col-lg-12 mb-3">
                                    @if(session('compSuccess'))
                                    <div class="alert alert-success">
                                    {{ session('compSuccess') }}
                                    </div>
                                    @endif
                                    @if(session('compError'))
                                    <div class="alert alert-danger">
                                    {{ session('compError') }}
                                    </div>
                                    @endif
                                    <form id="complaint-form" action="/create-complaint-form" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label for="complaint-form" class="col-form-label text-md-right">{{ __('Form of Complaint') }}</label>
                                                
                                                <input id="complaint-form" type="text" class="form-control @error('complaint-form') is-invalid @enderror" name="complaint_form" value="{{ old('complaint-form') }}" required autocomplete="off" autofocus>
                            
                                                @error('complaint-form')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <button type="submit"  class="btn btn-outline-primary" onclick="event.preventDefault();
                                        document.getElementById('complaint-form').submit();">
                                            {{ __('Create Complaint Form') }}
                                      </button>
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





