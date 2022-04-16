@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2> Show Product</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('display') }}"> Start</a>
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>
</div>


@endsection

