@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <hr>
    <form action="/" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="title artikel" value="{{old('title')}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
          <textarea name="subject" class="form-control" id="subject" rows="3">{{old('subject')}}</textarea>
            @error('subject')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection