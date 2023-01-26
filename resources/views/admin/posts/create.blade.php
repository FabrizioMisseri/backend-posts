@extends('layouts.admin')

@section('content')
    <div class="container">

        <form class="form-control" action="{{ route('admin.posts.store') }}" method="POST">
            @csrf

            <div class="form-group mb-2">
                <div>

                    <label for="name">Name:</label>
                </div>
                <input type="text" id="name" min="4" max="150" name="name">
            </div>

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