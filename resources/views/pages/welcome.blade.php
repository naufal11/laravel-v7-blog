@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in ' . Auth::user()->name . ' !') }} --}}
                    <h4>{{ __('Welcome ' . Auth::user()->name) }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
