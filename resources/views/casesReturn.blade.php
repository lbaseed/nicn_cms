@extends('layouts.master')
@section('content')
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">

                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">{{ __('Quarterly Return off Cases') }} </div>
                                <div class="card-body">
                                <div class="col-md-12 mb-3">
                                    <form id="quarter" action="/get-quarter" target="_blank" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <select id="perid" type="text" class="form-control" name="division">
                                                    <option value="">Select Division</option>
                                                    <option value="">All Divisions</option>
                                                    <option value="BAU">BAU</option>
                                                    <option value="GMB">GMB</option>
                                                    <option value="YLA">YLA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <select id="perid" type="text" class="form-control" required name="year">
                                                    <option value="">Select Year</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <select id="perid" type="text" class="form-control" required name="period">
                                                    <option value="">Select Quater</option>
                                                    <option value="1">1st Quarter</option>
                                                    <option value="4">2nd Quarter</option>
                                                    <option value="7">3rd Quarter</option>
                                                    <option value="10">4th Quarter</option>
                                                </select>
                                            </div>
                                        </div>

                                        <button type="submit"  class="btn btn-outline-primary" target="_blank">
                                            {{ __('Generate 1/4 Return') }}
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





