@extends('layouts.site')

@section('content')

    @component('components.site.banner-background', ['img' => '/img/roadmap-banner.jpg'])
        @slot('title')
            <h1 class="text-center" style="font-weight: bolder; font-size: 65px;">Roadmap</h1>
        @endslot
    @endcomponent


    <div class="container">
        <br>
        <br>
        {{--<h2 class="pb-3 pt-2 border-bottom mb-5 text-center"></h2>--}}

        <!--first section-->
        <div class="row align-items-center how-it-works d-flex">
            <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                <div class="circle font-weight-bold">Q1 <br> 2019</div>
            </div>
            <div class="col-6">
                <h5>Fully Responsive</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
            </div>
        </div>

        <!--path between 1-2-->
        <div class="row timeline">
            <div class="col-2">
                <div class="corner top-right"></div>
            </div>
            <div class="col-8">
                <hr/>
            </div>
            <div class="col-2">
                <div class="corner left-bottom"></div>
            </div>
        </div>

        <!--second section-->
        <div class="row align-items-center justify-content-end how-it-works d-flex">
            <div class="col-6 text-right">
                <h5>Using Bootstrap</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
            </div>
            <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                <div class="circle font-weight-bold">Q2 <br> 2019</div>
            </div>
        </div>

        <!--path between 2-3-->
        <div class="row timeline">
            <div class="col-2">
                <div class="corner right-bottom"></div>
            </div>
            <div class="col-8">
                <hr/>
            </div>
            <div class="col-2">
                <div class="corner top-left"></div>
            </div>
        </div>

        <!--third section-->
        <div class="row align-items-center how-it-works d-flex">
            <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center" style="margin-left: 3px;">
                <div class="circle font-weight-bold">Q4 <br> 2019</div>
            </div>
            {{--<div class="col-2 text-center full top bottom d-inline-flex justify-content-center align-items-center">--}}
                  {{--d-inline-flex justify-content-center align-items-center--}}
                {{--<div class="circle font-weight-bold">3</div>--}}
            {{--</div>--}}
            <div class="col-6">
                <h5>Now with Pug and Sass</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
            </div>

        </div>

        <div class="row timeline">
            <div class="col-2">
                <div class="corner top-right"></div>
            </div>
            <div class="col-8">
                <hr/>
            </div>
            <div class="col-2">
                <div class="corner left-bottom"></div>
            </div>
        </div>

        <!--second section-->
        <div class="row align-items-center justify-content-end how-it-works d-flex">
            <div class="col-6 text-right">
                <h5>Using Bootstrap</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
            </div>
            <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                <div class="circle font-weight-bold">Q4 <br> 2019</div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

@endsection

@push('css')
    <style>
        .circle {
            padding: 13px 20px;
            border-radius: 50%;
            background-color: #ED8D8D;
            color: #fff;
            height:80px;
            width:80px;
            z-index: 2;
        }

        .how-it-works.row .col-2 {
            align-self: stretch;
        }
        .how-it-works.row .col-2::after {
            content: "";
            position: absolute;
            border-left: 3px solid #ED8D8D;
            z-index: 1;
        }
        .how-it-works.row .col-2.bottom::after {
            height: 50%;
            left: 50%;
            top: 50%;
        }
        .how-it-works.row .col-2.full::after {
            height: 100%;
            left: calc(50% - 3px);
        }
        .how-it-works.row .col-2.top::after {
            height: 50%;
            left: 50%;
            top: 0;
        }


        .timeline div {
            padding: 0;
            height: 40px;
        }
        .timeline hr {
            border-top: 3px solid #ED8D8D;
            margin: 0;
            top: 17px;
            position: relative;
        }
        .timeline .col-2 {
            display: flex;
            overflow: hidden;
        }
        .timeline .corner {
            border: 3px solid #ED8D8D;
            width: 100%;
            position: relative;
            border-radius: 15px;
        }
        .timeline .top-right {
            left: 50%;
            top: -50%;
        }
        .timeline .left-bottom {
            left: -50%;
            top: calc(50% - 3px);
        }
        .timeline .top-left {
            left: -50%;
            top: -50%;
        }
        .timeline .right-bottom {
            left: 50%;
            top: calc(50% - 3px);
        }
    </style>
@endpush

@push('js')

@endpush