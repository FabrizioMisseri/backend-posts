@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h3 class="text-center">La lista dei posts</h3>
        {{-- message --}}
        @if (session('message'))
            <div class="row justify-content-center">
                <div class="col-8 mb-3 mt-3">
                    <p class="alert alert-success">
                        {{ session('message') }}
                    </p>
                </div>
            </div>
        @endif
        {{-- / message --}}

        {{-- crea --}}
        <div class="row justify-content-end mt-4 mb-4">
            <div class="col-3">
                <a href=" {{ route('admin.posts.create') }} " class="btn btn-primary">
                    crea nuovo post
                </a>
            </div>
        </div>
        {{-- / crea --}}

        {{-- TABLE --}}
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">id</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{ $post->name }}</th>
                                <td>{{ $post->id }}</td>
                                {{-- area buttoni --}}
                                <td>
                                    <a class="btn btn-success" href="{{ route('admin.posts.show', $post->id) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning" href="{{ route('admin.posts.edit', $post->id) }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST"
                                        class="d-inline-block">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" type="submit">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                {{-- / area buttoni --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- / TABLE --}}

    </div>
@endsection
