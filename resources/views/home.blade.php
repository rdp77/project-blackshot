@extends('layouts.default')

@section('title', __('Stack Games'))
@section('content')
@include('components.image-slider')
@include('components.information')
@include('components.news')
@include('components.matches')
@endsection