@extends('layouts.master')
@section('content')
<main class="py-4">
    <div class="container">
        
<div class="row col-lg-12 justify-content-center">

    <div class="card card-stats col-sm-12 col-md-3 m-3">  
            <!-- Card body -->
        <div class="card-body">    
            <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Gombe Cases</h5>
                    <span class="h2 font-weight-bold mb-0">
                        {{ App\Http\Controllers\CaseController::casesQty('GMB')  }}
                    </span>
                </div>
                <div class="col-auto">
                <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                    <i class="ni ni-collection"></i>
                </div>
                </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                <span class="text-nowrap"></span>
            </p>
        </div>
    </div>

    <div class="card card-stats col-sm-12 col-md-3 m-3">  
        <!-- Card body -->
        <div class="card-body">    
            <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Bauchi Cases</h5>
                    <span class="h2 font-weight-bold mb-0">
                        {{ App\Http\Controllers\CaseController::casesQty('BAU')  }}
                    </span>
                </div>
                <div class="col-auto">
                <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                    <i class="ni ni-collection"></i>
                </div>
                </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                <span class="text-nowrap"></span>
            </p>
        </div>
    </div>

    <div class="card card-stats col-sm-12 col-md-3 m-3">  
            <!-- Card body -->
        <div class="card-body">    
            <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Yola Cases</h5>
                    <span class="h2 font-weight-bold mb-0">
                        {{ App\Http\Controllers\CaseController::casesQty('YL')  }}
                    </span>
                </div>
                <div class="col-auto">
                <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                    <i class="ni ni-collection"></i>
                </div>
                </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                <span class="text-nowrap"></span>
            </p>
        </div>
    </div>

</div>

<div class="row justify-content-center">
    <div class="col-lg-12 row">
        {{-- Gombe Division Case Summary --}}
        <div class="col-sm-12 col-md-4">
            <div class="card">
                    <div class="card-header">{{ __('Gombe Division Cases') }}</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($gombe as $case)
                                <a href="/case/{{ $case->id }}">
                                    <li class="list-group-item my-1">{{ $case->case_id }}<br>
                                        <small>{{ $case->case_name }}</small>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                
            </div>
        </div>

        <div class="col-sm-12 col-md-4">
            <div class="card">
                    <div class="card-header">{{ __('Bauchi Division Cases') }}</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($bauchi as $case)
                                <a href="/case/{{ $case->id }}">
                                    <li class="list-group-item my-1">{{ $case->case_id }}<br>
                                        <small>{{ $case->case_name }}</small>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                
            </div>
        </div>

        <div class="col-sm-12 col-md-4">
            <div class="card">
                    <div class="card-header">{{ __('Yola Division Cases') }}</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($yola as $case)
                                <a href="/case/{{ $case->id }}">
                                    <li class="list-group-item my-1">{{ $case->case_id }}<br>
                                        <small>{{ $case->case_name }}</small>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                
            </div>
        </div>
    </div>
</div>

    </div>   
</main>
@endsection
