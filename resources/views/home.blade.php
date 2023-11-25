@extends('Layouts.app')


@section('contents')
@include('Components.hero')
<div class="container">
    @include('Components.aboutSection')
    @include('Components.projectSection')
    @include('Components.team')
</div>
@include('Components.contactSection')
@endsection