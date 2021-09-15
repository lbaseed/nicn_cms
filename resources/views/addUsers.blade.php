@extends('layouts.master')
@section('content')
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">{{ __('Manage System Users') }}</div>
                        <div class="card-body">
                            
                            <form method="POST" action="/system-users">
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
                                {{-- File Number --}}
                                <div class="form-group row">
                                    <label for="file_number" class="col-md-4 col-form-label text-md-right">{{ __('File Number') }}</label>
                        
                                    <div class="col-md-6">
                                        <input id="file_number" type="text" class="form-control @error('file_number') is-invalid @enderror" name="file_number" required autocomplete="off">
                        
                                        @error('file_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Full Name --}}
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>
                        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="off">
                        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Email --}}
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>
                        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="off">
                        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Phone Number --}}
                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
                        
                                    <div class="col-md-6">
                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" autocomplete="off">
                        
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Select Clearance --}}
                                <div class="form-group row">
                                    <label for="clrs" class="col-md-4 col-form-label text-md-right">{{ __('Clearance') }}</label>
                        
                                    <div class="col-md-6">
                                        <select id="clrs" type="text" class="form-control @error('clrs') is-invalid @enderror" name="clrs" required>
                                            <option value="">Select Clearance</option>
                                              <option value="5">Admin</option>  
                                              <option value="2">User</option>  
                                        </select>
                        
                                        @error('case_id')
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
                                            {{ __('Add New User') }}
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
                            
                            @if (count($users)>0)
                                <div class="table-responsive">
                                    <table class="table table-hover" id="casesTable">
                                     
                                            <tr>
                                                <th>SN</th>
                                                <th>File Number</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                
                                            </tr>
                                       
                                        <tbody>    
                                          
                                        @foreach ($users as $user)
                                        
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td><a href="/system-user/{{ $user->id }}"><b>{{ $user->file_number }}</b></a></td> 
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone }}</td>
                                                
                                            </tr>
                                        

                                          
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>SN</th>
                                                <th>File Number</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
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





