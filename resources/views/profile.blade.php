@extends('layouts.master')
@section('content')
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
    
                

                <div class="col-md-12 col-sm-12">
                    <div class="card">
                            <div class="card-header"><h3>{{ __('User Profile') }}</h3>
                                
                            </div>
                            <div class="card-body p-0">
                                   
                                @if ($user)
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped">
                                        
                                        <tbody>    
                                       
                                            <tr>
                                                <td><b>File Number</b></td> <td><a href="/system-user/{{ $user->id }}/edit"><b>{{ $user->file_number }}</b></a></td>
                                            </tr><tr>
                                                <td><b>Full Name</b></td> <td>{{ $user->name }}</td>
                                            </tr><tr> 
                                                <td><b>Email</b></td> <td>{{ $user->email }}</td>
                                            </tr><tr>
                                                <td><b>Phone Number</b></td> <td>{{ $user->phone }}</td>
                                            </tr><tr>
                                                <td><b>Clearance Level</b></td> <td>{{ $user->clrs == 5 ? "Admin":"User" }}</td>
                                            </tr>
                                        
                                        </tbody>
                                        
                                    </table>
                                </div>
                                
                                @else
                                <div class="alert alert-info">
                                    {{ __('No Record Found') }}
                                </div>
                                @endif

                            </div>
                    </div>
                </div>

               
            </div>
        </div>
    </div>   
</main>
@endsection





