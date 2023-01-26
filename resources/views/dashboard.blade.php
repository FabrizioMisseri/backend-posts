@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <p>
                        {{ __('You are logged in!') }}
                    </p>

                    {{-- <div class="mt-5">
                        <a href="{{ route('admin.index') }}">
                            Vai all' index
                        </a>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
@endsection
