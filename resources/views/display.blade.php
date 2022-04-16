@extends('layouts.app')
@section('content')
<body>
    
<div class="container">
    <div class="container">
        {!! $listings->links() !!}
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
              
            <div class="pull-left">
                <h2> Show Listing for Approval</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.home') }}"> Back</a>
            </div>
        </div>
    </div>
    @if($listings->count()==0)
    <h1>opps nothing to show!</h1>
    @endif
    @foreach ($listings as $listing)
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $listing->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>phone:</strong>
                {{ $listing->phone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>address:</strong>
                {{ $listing->address }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $listing->details }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <a href="{{route('transfer',$listing->id)}}">approve</a>
                
            </div>
            <div class="form-group ">
                <a href="{{route('disapprove',$listing->id)}}" class="link-danger">[x] discard</a>
                
            </div>
        </div>
    </div>
    @endforeach
</div>
</body>
@endsection