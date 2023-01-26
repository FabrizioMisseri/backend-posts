@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-8 offset-2">
                <h1 class="mt-3">{{ $post->name }}</h1>

                <h5 class="mt-3">{{ $post->id }}</h5>

                <p>{{ $post->text }}</p>
            </div>
        </div>
    </div>
@endsection
