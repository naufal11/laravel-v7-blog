@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 80vh">
        <div class="col-md-8 align-self-center text-center">
            <h3 class="text-muted text-monospace">
                <span class="pr-3" style="border-right: 2px solid">@yield('code')</span>
                <small class="text-black-50">@yield('message')</small>
            </h3>
        </div>
    </div>
</div>
@endsection
