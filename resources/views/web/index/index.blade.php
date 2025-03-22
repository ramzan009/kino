@extends('layouts.main')

@section('title', 'Онлайн кинотеатр')

@section('content')
    @include('layouts.includes.menu')
    @include('layouts.includes.slik-slider')

    @include('layouts.includes.film')
    @include('layouts.includes.footer')
@endsection
