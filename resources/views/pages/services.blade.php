@extends('layouts.layout')
@section('content')
    <!-- Header Banner -->
    @if ($image_service != null)
        @php
            $serviceImage = asset($image_service->image_path);
        @endphp
    @endif

    <section class="banner-header section-padding bg-img" data-overlay-dark="6"
        data-background="{{ $serviceImage ?? asset('public/FrontEnd/img/slider/3.jpg') }}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h6>Chúng tôi có gì</h6>
                        <h1><span>Dịch vụ</span> của tôi</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- Services 2 -->
    <section class="services2 section-padding">
        <div class="container">
            <div class="row">
                @if ($services->isEmpty())
                    <div class="col-md-12 text-center">
                        <h2 style="color:white">Dịch vụ chưa được cập nhật</h2>
                    </div>
                @else
                    @foreach ($services as $service_detail)
                        <div class="col-lg-4 col-md-6 mb-45">
                            <div class="item">
                                <img src="{{ asset($service_detail->image) }}" class="img-fluid" alt="">
                                <div class="bottom-fade"></div>
                                <div class="title">
                                    <h4>
                                        <a href="{{ URL::to('service-detail/' . $service_detail->id) }}">
                                            {{ $service_detail->service_name }}
                                        </a>
                                    </h4>
                                </div>
                                <div class="curv-butn icon-bg">
                                    <a href="{{ URL::to('service-detail/' . $service_detail->id) }}" class="vid">
                                        <div class="icon">0{{ $loop->iteration }}</div>
                                    </a>
                                    <div class="br-left-top">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            class="w-11 h-11">
                                            <path
                                                d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                                fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                    <div class="br-right-bottom">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            class="w-11 h-11">
                                            <path
                                                d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                                fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
