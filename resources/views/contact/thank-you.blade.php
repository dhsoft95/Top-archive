@extends('Layouts.app')

@section('title', 'Thank You - Top Archive')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="thank-you-container">
                    <h1>Thank You!</h1>
                    <div class="check-icon">
                        <i class="fa fa-check-circle"></i>
                    </div>
                    <p>Your inquiry has been successfully submitted. We appreciate your interest in Top Archive.</p>
                    <p>Our team will review your inquiry and get back to you shortly.</p>
                    <a href="{{ route('home') }}" class="btn btn-warning mt-4">Return to Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection