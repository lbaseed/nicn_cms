@extends('layouts.master')
@section('content')
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
    
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">{{ __('Search among All Cases') }}</div>
                            <div class="card-body">
                                @if (count($cases)>0)
                                    <ol class="list-group list-group-numbered">
                                        @foreach ($cases as $case)
                                            <a href='/case/{{ $case->id }}'>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                <div class="font-weight-bolder">{{ $case->case_id }}</div>
                                                    {{ $case->case_name }}
                                                </div>
                                                <span class="badge bg-primary rounded-pill text-lighter">{{ $case->current_stage }}</span>
                                            </li>
                                            </a>
                                        @endforeach
                                    </ol>
                                @else
                                  No Record matching this search  
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





