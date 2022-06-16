@extends('errors::layout')
@section('title', __('Forbidden'))
@section('error-content')
    <div class="error-content">
        <h3><i class="fas fa-exclamation-triangle text-warning"></i> 404 Oops! Page not found.</h3>
        <p>
            We could not find the page you were looking for.
            Meanwhile, you may
            <a href="{{ route('scv_all') }}">back to home page</a>
        </p>
    </div>
@endsection
