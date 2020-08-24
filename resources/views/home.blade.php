@extends('layouts.default')

@section('title', __('Project Blackshot'))
@section('content')
@include('components.image-slider')
@include('components.information')
@include('components.news')
@include('components.matches')
@endsection