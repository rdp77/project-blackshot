@extends('layouts.content')

@section('title', __('Stack Games | Downloads'))
@section('breadcrumbs', __('Downloads'))
@section('content')
<!-- START: Table -->
<table class="nk-table table-responsive-lg">
    <thead>
        <tr>
            <th colspan="3">Client</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Size</th>
            <th>Date</th>
            <th class="text-center">Link</th>
        </tr>
        <tr>
            <td>2.4 GB</td>
            <td>11/12/2020</td>
            <td class="text-center">
                <a href="#" class="nk-btn nk-btn-lg nk-btn-rounded nk-btn-color-white">Download</a>
            </td>
        </tr>
        <tr>
            <td>2.0 GB</td>
            <td>11/11/2020</td>
            <td class="text-center">
                <a href="#" class="nk-btn nk-btn-lg nk-btn-rounded nk-btn-color-white">Download</a>
            </td>
        </tr>
        <tr>
            <td>1.4 GB</td>
            <td>11/10/2020</td>
            <td class="text-center">
                <a href="#" class="nk-btn nk-btn-lg nk-btn-rounded nk-btn-color-white">Download</a>
            </td>
        </tr>
    </tbody>
</table>
<div class="nk-gap"></div>
<table class="nk-table table-responsive-lg">
    <thead>
        <tr>
            <th colspan="4">Additional</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Name</th>
            <th>Size</th>
            <th>Information</th>
            <th class="text-center">Link</th>
        </tr>
        <tr>
            <td>TSS</td>
            <td>2.4 GB</td>
            <td>In Addition To</td>
            <td class="text-center">
                <a href="#" class="nk-btn nk-btn-lg nk-btn-rounded nk-btn-color-white">Download</a>
            </td>
        </tr>
        <tr>
            <td>TSS</td>
            <td>2.4 GB</td>
            <td>In Addition To</td>
            <td class="text-center">
                <a href="#" class="nk-btn nk-btn-lg nk-btn-rounded nk-btn-color-white">Download</a>
            </td>
        </tr>
        <tr>
            <td>TSS</td>
            <td>2.4 GB</td>
            <td>In Addition To</td>
            <td class="text-center">
                <a href="#" class="nk-btn nk-btn-lg nk-btn-rounded nk-btn-color-white">Download</a>
            </td>
        </tr>
    </tbody>
</table>
<!-- END: Table -->
<div class="nk-gap"></div>
<h3 class="nk-decorated-h"><span>System Requirement</span></h3>
<!-- START: Accordion -->
<div class="nk-accordion" id="accordion-1" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="accordion-1-1-heading">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#accordion-1-1"
                aria-expanded="true" aria-controls="accordion-1-1">
                Minimum <span class="panel-heading-arrow fa fa-angle-down"></span>
            </a>
        </div>
        <div id="accordion-1-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-1-1-heading">
            <ul class="text-main-1 pl-20">
                <li>
                    <strong class="text-white">CPU: Pentium 4 2.4 GHz / Athlon XP 2500+</strong>
                </li>
                <li>
                    <strong class="text-white">RAM: 512 MB</strong>
                </li>
                <li>
                    <strong class="text-white">OS: Windows System NT/2000/XP/7</strong>
                </li>
                <li>
                    <strong class="text-white">VIDEO CARD: GeForce FX 5700/ Radeon9600 PIXEL SHADER: 2.0</strong>
                </li>
                <li>
                    <strong class="text-white">SOUND CARD: Yes</strong>
                </li>
                <li>
                    <strong class="text-white">DEDICATED VIDEO RAM: 128 MB</strong>
                </li>
            </ul>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="accordion-1-2-heading">
            <a data-toggle="collapse" data-parent="#accordion-1" href="#accordion-1-2" aria-expanded="false"
                aria-controls="accordion-1-2">
                Recommended <span class="panel-heading-arrow fa fa-angle-down"></span>
            </a>
        </div>
        <div id="accordion-1-2" class="panel-collapse collapse in" role="tabpanel"
            aria-labelledby="accordion-1-2-heading">
            <ul class="text-main-1 pl-20">
                <li>
                    <strong class="text-white">CPU: Intel Dual Core 2.8GHZ</strong>
                </li>
                <li>
                    <strong class="text-white">RAM: 4 GB</strong>
                </li>
                <li>
                    <strong class="text-white">OS: Windows 7 or UP</strong>
                </li>
                <li>
                    <strong class="text-white">VIDEO CARD: NVIDIA 9600GT(512MB), Radeon HD5570</strong>
                </li>
                <li>
                    <strong class="text-white">SOUND CARD: Yes</strong>
                </li>
                <li>
                    <strong class="text-white">DEDICATED VIDEO RAM: 2 GB</strong>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END: Accordion -->
@endsection