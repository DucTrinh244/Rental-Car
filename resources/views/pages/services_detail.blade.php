@extends('layouts.layout')
@section('content')
    @if ($image_service != null)
        @php
            $servicesDetailImage = asset($image_service->image_path);
        @endphp
    @endif

    <section class="banner-header section-padding bg-img" data-overlay-dark="5"
        data-background="{{ $servicesDetailImage ?? asset('public/FrontEnd/img/slider/1.jpg') }}">
        <div class="v-middle">
            <div class="container">
                <div class="col-md-12">
                    <h6>Các dịch vụ</h6>
                    @if ($services->isEmpty())
                        <h1 style="color:white">Dịch vụ chưa được cập nhật</h1>
                    @else
                        <h1>{{ $service_detail->service_name }}</h1>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Details -->
    <section class="service-details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row mb-60">
                        <div class="col-md-12">
                            <h3>Thông tin chi tiết về dịch vụ</h3>
                            <p class="mb-30">{{ $service_detail->description }}</p>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-page">
                        <div class="title">
                            <h4>Tất cả dịch vụ</h4>
                        </div>
                        <div class="item">
                            @if ($services->isEmpty())
                                <h2 style="color:white">Dịch vụ chưa được cập nhật</h2>
                            @else
                                @foreach ($services as $service_item)
                                    @if ($service_item->id == $service_detail->id)
                                        <div class="features active"><span><i class="ti-arrow-top-right"></i>
                                                {{ $service_item->service_name }}</span></div>
                                    @else
                                        <div class="features"><span><i class="ti-arrow-top-right"></i>
                                                {{ $service_item->service_name }}</span></div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
