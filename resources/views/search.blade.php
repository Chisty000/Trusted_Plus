@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Listings') }}</div>
  
                <div class="card-body">
                    <div class="pull-left">
                        <h2>Total Search results {{$data->count()}}</h2>
                    </div>
                </div>
            </div>
            @foreach ($data as $single_data) 
            <div class="card mt-3">
                <div class="card-header">{{$single_data->name}}</div>
  
                <div class="card-body">
                    <div class="pull-left">
                        <h3>{{$single_data->category}}</h2>
                    </div>

                    <div class="pull-left">
                        <a href="{{route('showSingle',$single_data->id)}}">show details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {!! $data->links() !!}
</div>
@endsection