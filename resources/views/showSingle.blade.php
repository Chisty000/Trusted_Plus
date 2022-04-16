@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            
            <div class="card">
                <div class="card-header">{{$singlez->name}}</div>
  
                <div class="card-body">
                    <div class="pull-left">
                        <h2>{{$singlez->category}}</h2>
                    </div>
                    <div class="pull-left mt-2">
                        <h3>{{$singlez->phone}}</h3>
                    </div>
                    <div class="pull-left mt-2">
                        <h4>Opening: {{$singlez->opening}}</h4>
                    </div>
                    <div class="pull-left mt-2">
                        <h4>Closing: {{$singlez->closing}}</h4>
                    </div>
                    <div class="pull-left mt-2">
                        <h4>{{$singlez->address}}</h4>
                    </div>
                    <div class="pull-left mt-2">
                        <a href="{{"//$singlez->website"}}" target="_blank">visit website</a>
                    </div>
                    <div class="pull-left mt-2">
                        <h4>{{$singlez->location}}</h4>
                    </div>
                    <div class="pull-left mt-2">
                        <p>{{$singlez->details}}</p>
                    </div>
                </div>
            </div>
            <div class="pull-left mt-2">
                <a href="{{route('welcome')}}">Go back!</a>
            </div>
        </div>
    </div>
</div>
@endsection