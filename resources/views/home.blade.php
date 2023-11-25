
@extends('Layouts.app')


@section('contents')
    @include('Components.hero')
    <div class="container">
    @include('Components.aboutSection')
    @include('Components.experiance')
    @include('Components.contactSection')
    @include('Components.team')
    </div>
@endsection