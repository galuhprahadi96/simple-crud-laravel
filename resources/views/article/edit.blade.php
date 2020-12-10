@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <hr>
    <form action="/{{$isi->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="title artikel" 
            value="{{old('title') ? old('title') : $isi->title}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
          <textarea name="subject" class="form-control" id="subject" rows="3">{{old('subject') ? old('subject') : $isi->subject}}</textarea>
            @error('subject')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection