@extends('layouts.master')
@section('content')
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
    
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">{{ __('Change Password') }}</div>
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

                                <form method="POST" action="/edit-password">
                                    @csrf
                                    
                                    {{-- {{ Auth::user()->file_number }} --}}
                                   
                                    {{-- Old Password --}}
                                    <div class="form-group row">
                                        <label for="old_password" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="old_password" type="old_password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" required autocomplete="off">
                            
                                            @error('old_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- New Password --}}
                                    <div class="form-group row">
                                        <label for="new_password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="new_password" type="text" class="form-control @error('new_password') is-invalid @enderror" name="new_password" required autocomplete="off">
                            
                                            @error('new_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Confirm new Password --}}
                                    <div class="form-group row">
                                        <label for="conf_new_password" class="col-md-4 col-form-label text-md-right">{{ __('Confirm New Passowrd') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="conf_new_password" type="text" class="form-control @error('conf_new_password') is-invalid @enderror" name="conf_new_password" required autocomplete="off" >
                            
                                            @error('conf_new_password')
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
                                                {{ __('Change Password') }}
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





