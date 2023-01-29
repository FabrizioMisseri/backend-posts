@extends('layouts.admin')

@section('content')
    <div class="container">

        @if ($errors->any())
            <div class="col-8 row mb-3 mt-3 alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="form-control" action="{{ route('admin.posts.store') }}" method="POST">
            @csrf

            <div class="form-group mb-2">
                <div>

                    <label for="name">Name:</label>
                </div>
                <input type="text" id="name" min="4" max="150" name="name">
            </div>

            {{-- tags --}}
            <div class="form-group mb-2 row">
                @foreach ($tags as $tag)
                    <div class="col-1">
                        <input type="checkbox" value="{{ $tag->id }}" name="tags[]" id="tag-{{ $tag->id }}">
                        <label for="tag-{{ $tag->id }}">
                            Tag: {{ $tag->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            {{-- / tags --}}

            <div class="form-group mb-2">
                <div>

                    <label for="text">Description:</label>
                </div>
                <textarea name="text" id="text" cols="30" rows="10"></textarea>
            </div>

            <div class="mt-4">
                <button class="btn btn-primary" type="submit">
                    SAVE
                </button>
            </div>

        </form>
    </div>
@endsection
