{{-- Use the main layout file --}}
@extends('layouts.app') {{-- Or whatever you named your layout file --}}

{{-- Define the content section --}}
@section('content')

    {{-- The Hero section goes HERE, outside the main container --}}
    @include('partials.hero')
    @include('components.home.services')


@endsection