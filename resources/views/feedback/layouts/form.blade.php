@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-1"></div>
        <div class="col-1">
        <ul class="nav flex-column text-center nav-underline">
            <li class="nav-item {{ Route::is('feedbackForm') ? 'navAtFeedbackForm' : '' }}">
                <a class="nav-link" aria-current="page" href="{{ route('feedbackForm')}}">Form</a>
            </li>
            <li class="nav-item {{ Route::is('feedbackQr') ? 'navAtFeedbackForm' : '' }}">
                <a class="nav-link" href="{{ route('feedbackQr')}}">QR Code</a>
            </li>
        </ul>
        </div>
        <div class="col-8">
        @yield('form_qr')
        </div>
    </div>
@endsection