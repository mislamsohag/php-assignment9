
@extends('Layouts.app')


@section('contents')
    @include('Components.hero')
    <div class="container">
    @include('Components.about')
    @include('Components.experiance')
    @include('Components.contact')
    @include('Components.team')
    </div>
@endsection