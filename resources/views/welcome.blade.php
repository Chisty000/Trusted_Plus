@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Listings') }}</div>
  
                <div class="card-body">
                    <form action="{{route('search')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Search:</strong>
                                    <input type="text" name="key" class="form-control" placeholder="search">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">search</button>
                            </div>
                    </form>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">Filters</div>
        
                <div class="card-body flex-row">
                    <div class="pull-left ">
                        <h4>category</h4>
                    </div>
                    <a href="/?category=restaurant">restaurant</a>
                    <a href="/?category=restora">restora</a>
                    <div class="pull-left ">
                        <h4>location</h4>
                    </div>
                    <a href="/?location=dhaka">dhaka</a>
                    <a href="/?location=khulna">khulna</a>
                </div>
            </div>
        </div>
    </div>

    @foreach ($approved as $single)
    <div class="card mt-3">
        <div class="card-header">{{($single->name) }}</div>

        <div class="card-body">
            <div class="pull-left">
                <h2>{{$single->details}}</h2>
            </div>
            <a href="{{route('showSingle',$single->id)}}">View Details</a>
        </div>
    </div>
    @endforeach
    <div class="mt-4"> {!! $approved->links() !!}</div>
   
</div>
@endsection