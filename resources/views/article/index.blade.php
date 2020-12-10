@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-2">list artikel</h1>
    <hr>
    @foreach ($articles as $article)
        <div class="card">
            <div class="card-body">
                <h4>{{ucfirst($article['title'])}}</h4>
                <p>{{$article['subject']}}</p>
                <a href="/{{$article->title}}" class="btn btn-success btn-sm">Lihat</a>
                <a href="/{{$article->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                <form action="/{{$article->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    @endforeach
    
    <div class="text-center mt-4">
        {{ $articles->links() }}
    </div>
@endsection