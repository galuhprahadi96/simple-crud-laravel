@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$isi->title}}</h5>
            <p class="card-text"><small class="text-muted"><strong> Publish : </strong>{{$isi->created_at}}</small></p>
            <p class="card-text">{{$isi->subject}}</p>
        </div>
    </div>
@endsection