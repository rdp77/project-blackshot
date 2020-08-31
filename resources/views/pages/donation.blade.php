@extends('layouts.content')

@section('title', __('Stack Games | Donation'))
@section('breadcrumbs', __('Donation'))
@section('content')
<!-- START: Donation -->
<div class="nk-feature-2">
    <div class="nk-feature-icon">
        <div class="nk-count h2 mb-0">{{ __('500') }}</div>
    </div>
    <div class="nk-feature-cont text-center">
        <h3 class="nk-feature-title"><span class="text-main-1">{{ __('Users') }}</span> Have Contributed</h3>
    </div>
</div>
<div class="nk-gap-2"></div>
<div class="align-center">
    <a href="#" class="nk-btn nk-btn-x4 nk-btn-rounded nk-btn-color-white">{{ __('Donate NOW') }}</a>
</div>
<div class="nk-gap-2"></div>
<!-- END: Donation -->
@endsection